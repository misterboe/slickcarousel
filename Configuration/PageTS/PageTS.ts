mod.wizards {
    newContentElement {
        wizardItems {
            slick {
                header = Slick
                elements {
                    slickcarousel {
                        icon = EXT:slickcarousel/ext_icon.gif
                        title = slick
                        description = the last carousel you'll ever need
                        tt_content_defValues {
                            CType = slickcarousel
                        }
                    }
                }
            }
            slick.show := addToList(slickcarousel)
        }
    }
}
