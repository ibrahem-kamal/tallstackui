<?php

dataset('personalizations.keys', [
    'tallstack-ui::personalizations.alert',
    'tallstack-ui::personalizations.avatar',
    'tallstack-ui::personalizations.badge',
    'tallstack-ui::personalizations.button',
    'tallstack-ui::personalizations.button.circle',
    'tallstack-ui::personalizations.card',
    'tallstack-ui::personalizations.dialog',
    'tallstack-ui::personalizations.dropdown',
    'tallstack-ui::personalizations.dropdown.items',
    'tallstack-ui::personalizations.errors',
    'tallstack-ui::personalizations.form.error',
    'tallstack-ui::personalizations.form.input',
    'tallstack-ui::personalizations.form.hint',
    'tallstack-ui::personalizations.form.label',
    'tallstack-ui::personalizations.form.password',
    'tallstack-ui::personalizations.form.checkbox',
    'tallstack-ui::personalizations.form.radio',
    'tallstack-ui::personalizations.form.textarea',
    'tallstack-ui::personalizations.form.toggle',
    'tallstack-ui::personalizations.modal',
    'tallstack-ui::personalizations.select.native',
    'tallstack-ui::personalizations.select.styled',
    'tallstack-ui::personalizations.tab',
    'tallstack-ui::personalizations.tab.items',
    'tallstack-ui::personalizations.toast',
    'tallstack-ui::personalizations.tooltip',
    'tallstack-ui::personalizations.wrapper.input',
    'tallstack-ui::personalizations.wrapper.radio',
]);

dataset('personalizations.components', [
    TallStackUi\View\Components\Form\Input::class,
    TallStackUi\View\Components\Form\Textarea::class,
    TallStackUi\View\Components\Form\Password::class,
    TallStackUi\View\Components\Form\Toggle::class,
    TallStackUi\View\Components\Form\Radio::class,
    TallStackUi\View\Components\Form\Checkbox::class,
    TallStackUi\View\Components\Form\Label::class,
    TallStackUi\View\Components\Alert::class,
    TallStackUi\View\Components\Card::class,
    TallStackUi\View\Components\Dropdown\Dropdown::class,
    TallStackUi\View\Components\Dropdown\Items::class,
    TallStackUi\View\Components\Badge::class,
    TallStackUi\View\Components\Avatar::class,
    TallStackUi\View\Components\Form\Hint::class,
    TallStackUi\View\Components\Form\Error::class,
    TallStackUi\View\Components\Errors::class,
    TallStackUi\View\Components\Tab\Tab::class,
    TallStackUi\View\Components\Tab\Items::class,
    TallStackUi\View\Components\Tooltip::class,
    TallStackUi\View\Components\Button\Button::class,
    TallStackUi\View\Components\Button\Circle::class,
    TallStackUi\View\Components\Select\Native::class,
    TallStackUi\View\Components\Select\Styled::class,
    TallStackUi\View\Components\Modal::class,
    TallStackUi\View\Components\Interaction\Toast::class,
    TallStackUi\View\Components\Interaction\Dialog::class,
    TallStackUi\View\Components\Wrapper\Input::class,
    TallStackUi\View\Components\Wrapper\Radio::class,
]);

dataset('colors', [
    'primary',
    'secondary',
    'dark',
    'white',
    'black',
    'slate',
    'gray',
    'zinc',
    'neutral',
    'stone',
    'red',
    'orange',
    'amber',
    'yellow',
    'lime',
    'green',
    'emerald',
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose',
]);
