# TYPO3 Extension `headless_viewhelper` - Extends the TYPO3 headless with Fluid ViewHelpers

## Installation
Install extension using composer

``composer require svenlie/headless-viewhelper``

## Configuration

To activate XClass of fluid viewhelpers set the following feature flag in ``settings.php`` or ``additional.php``:
````php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['headlessViewhelper.overrideFluidViewHelper'] = true;
````

<mark>Do not use that configuration for sites which should render fluid!</mark>

## Usage
Use the following fluid namespace:
```html
<headlessViewhelper:form additionalAttributes="{data-anything: 'some info', data-something: 'blub'}" class="bla" action="submit" name="customer">
    <headlessViewhelper:form.textfield name="myTextBox" value="default value" />
</headlessViewhelper:form>
```

If you activated the feature to XClass the fluid viewhelper you can use the following:
```html
<f:form additionalAttributes="{data-anything: 'some info', data-something: 'blub'}" class="bla" action="submit" name="customer">
    <f:form.textfield name="myTextBox" value="default value" />
</f:form>
```

