mod.wizards {
    newContentElement {
        wizardItems {
            slick {
                header = Slick
                elements {
                    slickslider {
                        icon = ../typo3conf/ext/slickslider/ext_icon.gif
                        title = slick
                        description = the last carousel you'll ever need
                        tt_content_defValues {
                            CType = slickslider
                        }
                    }
                }
            }
            slick.show := addToList(slickslider)
        }
    }
}
