---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            # dateFormat: j F Y
            dateFormat: %e %B %Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            title: Senaste inlägg
            meta:
                type: copy
                view: blog-list

...
Dagens foto-blogg
===========================

Dagens foto presenteras med en kort beskrivning om hur det gick till när bilden togs.
