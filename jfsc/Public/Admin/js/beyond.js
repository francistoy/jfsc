InitiateSideMenu();
function InitiateSideMenu() {
    $(".sidebar-menu").on('click', function (e) {
        //找menu-text对应的a，closest是找最近的元素，如果所找的元素是需要匹配的父元素，则所找的最近元素就是那个父元素。
        var menuLink = $(e.target).closest("a");
        if (!menuLink || menuLink.length == 0)
            return;
        if (!menuLink.hasClass("menu-dropdown")) {
            return;
        }
        //next()是指用于筛选每个匹配元素之后紧邻的同辈元素，并以jQuery对象的形式返回，get(0)是使它们成为dom对象
        var submenu = menuLink.next().get(0);
        if (!$(submenu).is(":visible")) {
            var c = $(submenu.parentNode).closest("ul");
            c.find("> .open > .submenu")
                .each(function () {
                    if (this != submenu )
                        $(this).slideUp(200).parent().removeClass("open");
                });
        }
        $(submenu).slideToggle(200).parent().toggleClass("open");
        return false;
    });
}

