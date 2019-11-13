---
title: 'Say Hello'
media_order: contact-bg.jpg
smallTitle: Contact
menu: contact
cache_enable: false
visible: true
background: contact-bg.jpg
opacity: '0.75'
phoneTitle: Phone
emailTitle: Email
emailAddress: sylwester.pilarz93@gmail.com
addressTitle: Address
addressDetails: "1600 Amphitheatre Parkway<br>\r\nMountain View, CA<br>\r\n94043 US"
phonePhone: 'Mobile: (+48) 506 715 473'
form:
    name: kontakt-ajax-form
    template: form-messages
    action: /home
    refresh_prevention: true
    fields:
        -
            name: name
            label: false
            placeholder: Name
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: form-field
            classes: full-width
        -
            name: email
            label: false
            placeholder: 'Email adress'
            type: email
            outerclasses: form-field
            classes: full-width
        -
            name: subject
            label: false
            type: text
            placeholder: Subject
            outerClasses: form-field
            classes: full-width
        -
            name: message
            label: false
            placeholder: Message
            type: textarea
            outerclasses: form-field
            classes: full-width
            rows: null
    buttons:
        -
            type: submit
            value: Submit
            outerclasses: form-field
            classes: 'full-width btn--primary'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Message from] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            message: 'Thank you for you''re message! We will contact you shortly'
---

