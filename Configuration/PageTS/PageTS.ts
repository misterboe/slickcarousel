mod.wizards {
    newContentElement {
        wizardItems {
            slick {
                header = Slick
                elements {
                    slickcarouselbasic {
                        icon = EXT:slickcarousel/ext_icon.gif
                        title = slick - Basic
                        description = One Slide with default Settings
                        tt_content_defValues {
                            CType = slickcarouselbasic
                        }
                    }
                    slickcarousel {
                        icon = EXT:slickcarousel/ext_icon.gif
                        title = slick - Expert
                        description = the last carousel you'll ever need
                        tt_content_defValues {
                            CType = slickcarousel
                        }
                    }
                }
            }
            slick.show := addToList(slickcarouselbasic, slickcarousel)
        }
    }
}
