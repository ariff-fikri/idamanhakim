<!--====== Anchor Scroll Fix (ScrollSmoother compatibility) ======-->
<script>
    document.addEventListener('click', function (e) {
        var link = e.target.closest('a[href^="#"]');
        if (!link) return;
        var id = link.getAttribute('href');
        if (id.length < 2) return;
        var target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        var smoother = window.ScrollSmoother && ScrollSmoother.get();
        if (smoother) {
            smoother.scrollTo(target, true, 'top top');
        } else {
            target.scrollIntoView({ behavior: 'smooth' });
        }
        history.pushState(null, '', id);
    });
</script>
<!--====== Work Gallery Masonry + Lightbox ======-->
<script>
    jQuery(function ($) {
        var $gallery = $('#workGallery');
        var $template = $('#workGalleryData');
        var showingMore = false;

        function columnCount() {
            var w = window.innerWidth;
            if (w < 576) return 2;
            if (w < 992) return 3;
            return 4;
        }

        function renderMasonry() {
            if (!$gallery.length || !$template.length) return;
            var $items = $template.contents().filter(function () {
                return this.nodeType === 1 && $(this).hasClass('gallery-col-item');
            });
            if (!showingMore) {
                $items = $items.filter(function () {
                    return $(this).attr('data-more') !== '1';
                });
            }

            var cols = columnCount();
            var $colEls = [];
            $gallery.empty();
            for (var c = 0; c < cols; c++) {
                var $col = $('<div class="gallery-col"></div>');
                $gallery.append($col);
                $colEls.push({ el: $col, height: 0 });
            }

            $items.each(function () {
                var $clone = $(this).clone();
                var ratio = 1;
                var m = /aspect-ratio:\s*([\d.]+)\s*\/\s*([\d.]+)/.exec($clone.find('.gallery-item').attr('style') || '');
                if (m) { ratio = parseFloat(m[2]) / parseFloat(m[1]); }
                var shortest = $colEls.reduce(function (a, b) { return b.height < a.height ? b : a; });
                shortest.el.append($clone);
                shortest.height += ratio;
            });

            if ($.fn.magnificPopup) {
                $gallery.magnificPopup({
                    delegate: 'a.gallery-item',
                    type: 'image',
                    gallery: { enabled: true },
                    image: {
                        titleSrc: function (item) {
                            return item.el.attr('data-caption');
                        }
                    },
                    mainClass: 'mfp-fade'
                });
            }
        }

        renderMasonry();

        var resizeTimer;
        $(window).on('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(renderMasonry, 200);
        });

        $('#galleryToggleBtn').on('click', function () {
            showingMore = true;
            renderMasonry();
            $(this).parent().parent().fadeOut(200);
        });
    });
</script>
