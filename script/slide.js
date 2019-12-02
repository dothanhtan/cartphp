$(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            }
        }
    })

    //    handler device phone  < 576
    function collapseAll() {
        $('#slider .col-sm-3 #list-submenu ul').each(function(index, element) {
            $(element).css('height', '0');
            $(element).css('opacity', '0');
        });
    }

    $('#slider #sub-menu-may-loc-nuoc-ro-kangaroo').click(function() {
        var ele = $('.sub-menu-may-loc-nuoc-ro-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');
        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');

        }
    })

    $('#slider #sub-menu-cay-nong-lanh-kangaroo').click(function() {
        var ele = $('.sub-menu-cay-nong-lanh-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');

        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');
        }
    })

    $('#slider #sub-menu-tu-dong-tu-mat-kangaroo').click(function() {
        var ele = $('.sub-menu-tu-dong-tu-mat-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');
        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');
        }
    })

    $('#slider #sub-menu-gia-dung-kangaroo').click(function() {
        var ele = $('.sub-menu-gia-dung-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');

        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');

        }
    })

    $('#slider #sub-menu-thiet-bi-mua-dong-kangaroo').click(function() {
        var ele = $('.sub-menu-thiet-bi-mua-dong-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');

        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');

        }
    })

    $('#slider #sub-menu-thiet-bi-nha-bep').click(function() {
        var ele = $('.sub-menu-thiet-bi-nha-bep');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');

        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');

        }
    })

    $('#slider #sub-menu-thiet-bi-ve-sinh-kangaroo').click(function() {
        var ele = $('.sub-menu-thiet-bi-ve-sinh-kangaroo');
        if (ele.outerHeight(true) === 0) {
            collapseAll();
            ele.css('height', 'auto');
            ele.css('opacity', '1');

        } else {
            ele.css('height', '0');
            ele.css('opacity', '0');

        }
    })

    //    handler device size > 576
    $('#slider .col-sm-3 #list-submenu > li#may-loc-nuoc-hydrogen').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#may-loc-nuoc-ro-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty();
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-may-loc-nuoc-ro-kangaroo').clone().appendTo('#slider .submenu')
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#loc-dau-nguon-loc-tinh-khiet').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#cau-nong-lanh-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-cay-nong-lanh-kangaroo').clone().appendTo('#slider .submenu')
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#tu-dong-tu-mat-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-tu-dong-tu-mat-kangaroo').clone().appendTo('#slider .submenu')
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#quat-dieu-hoa-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#gia-dung-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-gia-dung-kangaroo').clone().appendTo('#slider .submenu')

            var ul = document.createElement('ul');
            ul.classList.add('list-group')

            $('#slider .submenu .sub-menu-gia-dung-kangaroo li').each(function(index, element) {
                if (index >= 9) {
                    ul.append(element)
                }
            })

            $('#slider .submenu').append(ul)
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#thiet-bi-mua-dong-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-thiet-bi-mua-dong-kangaroo').clone().appendTo('#slider .submenu')
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#thiet-bi-nha-bep-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-thiet-bi-nha-bep').clone().appendTo('#slider .submenu')

            var ul = document.createElement('ul');
            ul.classList.add('list-group')

            $('#slider .submenu .sub-menu-thiet-bi-nha-bep li').each(function(index, element) {
                if (index >= 9) {
                    ul.append(element)
                }
            })

            $('#slider .submenu').append(ul)
        }
    })

    $('#slider .col-sm-3 #list-submenu > li#thiet-bi-ve-sinh-kangaroo').hover(function() {
        if ($('body').outerWidth() > 576) {
            $('#slider .submenu').empty()
            $('#slider .submenu').css('opacity', '1')
            $('#slider .sub-menu-thiet-bi-ve-sinh-kangaroo').clone().appendTo('#slider .submenu')
        }
    })

    //    check visible submenu
    var isVisble = false;
    $('#slider .col-sm-3').mouseleave(function() {
        if ($('body').outerWidth() > 576) {
            isVisble = true
        }
    })
    $('#slider .submenu').mouseleave(function() {
        if (isVisble) {
            $('#slider .submenu').css('opacity', '0')
        }
    })

});
//Điều chỉnh độ rộng và chiều cao cho overlay
var sizeTheOverlays = function() {
    $(".overlay").resize().each(function() {
    var h = $(this).parent().height();
    var w = $(this).parent().width();
    $(this).css("height", h);
    $(this).css("width", w);
    });
};

sizeTheOverlays();
    
//Hiển thị tooltip
$('[data-toggle="tooltip"]').tooltip();   