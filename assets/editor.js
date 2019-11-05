(function (richText, element, editor) {
    const name = 'line/pinkline';
    const title = 'pinkline';
    const className = 'pinkline';
    richText.registerFormatType(name, {
        title: title,
        tagName: 'span',
        className: className,
        edit: function ({ isActive, value, onChange }) {
            return element.createElement(editor.RichTextToolbarButton, {
                icon: 'admin-customizer',
                title: title,
                onClick: function () {
                    onChange(richText.toggleFormat(value, {
                        type: name
                    }));
                },
                isActive: isActive,
            });
        },
    });
}(
    window.wp.richText,
    window.wp.element,
    window.wp.editor
));
(function (richText, element, editor) {
    const name = 'line/blueline';
    const title = 'blueline';
    const className = 'blueline';
    richText.registerFormatType(name, {
        title: title,
        tagName: 'span',
        className: className,
        edit: function ({ isActive, value, onChange }) {
            return element.createElement(editor.RichTextToolbarButton, {
                icon: 'admin-customizer',
                title: title,
                onClick: function () {
                    onChange(richText.toggleFormat(value, {
                        type: name
                    }));
                },
                isActive: isActive,
            });
        },
    });
}(
    window.wp.richText,
    window.wp.element,
    window.wp.editor
));
(function (richText, element, editor) {
    const name = 'line/yellowline';
    const title = 'yellowline';
    const className = 'yellowline';
    richText.registerFormatType(name, {
        title: title,
        tagName: 'span',
        className: className,
        edit: function ({ isActive, value, onChange }) {
            return element.createElement(editor.RichTextToolbarButton, {
                icon: 'admin-customizer',
                title: title,
                onClick: function () {
                    onChange(richText.toggleFormat(value, {
                        type: name
                    }));
                },
                isActive: isActive,
            });
        },
    });
}(
    window.wp.richText,
    window.wp.element,
    window.wp.editor
));