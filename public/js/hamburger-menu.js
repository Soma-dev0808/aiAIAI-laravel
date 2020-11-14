var HamburgerMenu = function() {
    this.hamburgerBtn = document.getElementById("js-hamburger-btn");
    this.headerMenu = document.getElementById("js-header-menu");
    this.headerMenuBg = document.getElementById("js-header-menu-background");
    this.activeClass = "is-active";
};
HamburgerMenu.prototype = {
    init: function() {
        this.attachEvent();
    },
    open: function() {
        this.headerMenu.classList.add(this.activeClass);
        // this.hamburgerBtn.classList.remove("fa-bars");
        // this.hamburgerBtn.classList.add("fa-times");
    },
    close: function() {
        this.headerMenu.classList.remove(this.activeClass);
        // this.hamburgerBtn.classList.remove("fa-times");
        // this.hamburgerBtn.classList.add("fa-bars");
    },
    openAndClose: function() {
        if (!this.headerMenu.classList.contains(this.activeClass)) {
            this.open();
        } else {
            this.close();
        }
    },
    attachEvent: function() {
        if (this.hamburgerBtn && this.headerMenuBg) {
            this.hamburgerBtn.addEventListener(
                "click",
                this.openAndClose.bind(this),
                false
            );
            this.headerMenuBg.addEventListener(
                "click",
                this.openAndClose.bind(this),
                false
            );
        }
    }
};
document.addEventListener("DOMContentLoaded", function() {
    var hamburger = new HamburgerMenu();
    hamburger.init();
});
