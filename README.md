# TYPO3 Extension `headless_viewhelper` - Extends the TYPO3 headless with Fluid ViewHelpers

## Installation
Install extension using composer

``composer require svenlie/headless-viewhelper``

## Usage
Use the following fluid namespace:
```html
<headlessViewhelper:form additionalAttributes="{data-anything: 'some info', data-something: 'blub'}" class="bla" action="submit" name="customer">
    <headlessViewhelper:form.textfield name="myTextBox" value="default value" />
</headlessViewhelper:form>
```

If you want to structure your viewhelpers you can use the following ViewHelpers:
```html
<headlessViewhelper:jsonArray identifier="global">
    <headlessViewhelper:jsonElement identifier="form">
        <headlessViewhelper:form additionalAttributes="{data-anything: 'some info', data-something: 'blub'}" class="bla" action="submit" name="customer">
            <headlessViewhelper:form.textfield name="myTextBox" value="default value" />
        </headlessViewhelper:form>
    </headlessViewhelper:jsonElement>
    <headlessViewhelper:jsonElement identifier="dummy">
        <examplePackage:dummy />
    </headlessViewhelper:jsonElement>
</headlessViewhelper:jsonArray>
```
