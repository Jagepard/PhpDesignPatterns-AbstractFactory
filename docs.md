## Table of contents

- [\Creational\AbstractFactory\AbstractFactory (abstract)](#class-creationalabstractfactoryabstractfactory-abstract)
- [\Creational\AbstractFactory\JsonFactory](#class-creationalabstractfactoryjsonfactory)
- [\Creational\AbstractFactory\XMLFactory](#class-creationalabstractfactoryxmlfactory)
- [\Creational\AbstractFactory\Handler](#class-creationalabstractfactoryhandler)
- [\Creational\AbstractFactory\JsonMessage](#class-creationalabstractfactoryjsonmessage)
- [\Creational\AbstractFactory\AbstractMessage (abstract)](#class-creationalabstractfactoryabstractmessage-abstract)
- [\Creational\AbstractFactory\XMLMessage](#class-creationalabstractfactoryxmlmessage)

<hr />

### Class: \Creational\AbstractFactory\AbstractFactory (abstract)

> Interface InterfaceAbstractFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>abstract createMessage(</strong><em>\string</em> <strong>$content</strong>)</strong> : <em>[\Creational\AbstractFactory\AbstractMessage](#class-creationalabstractfactoryabstractmessage-abstract)</em> |

<hr />

### Class: \Creational\AbstractFactory\JsonFactory

> Class JsonFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>createMessage(</strong><em>\string</em> <strong>$content</strong>)</strong> : <em>[\Creational\AbstractFactory\AbstractMessage](#class-creationalabstractfactoryabstractmessage-abstract)</em> |

*This class extends [\Creational\AbstractFactory\AbstractFactory](#class-creationalabstractfactoryabstractfactory-abstract)*

<hr />

### Class: \Creational\AbstractFactory\XMLFactory

> Class GermanFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>createMessage(</strong><em>\string</em> <strong>$content</strong>)</strong> : <em>[\Creational\AbstractFactory\AbstractMessage](#class-creationalabstractfactoryabstractmessage-abstract)</em> |

*This class extends [\Creational\AbstractFactory\AbstractFactory](#class-creationalabstractfactoryabstractfactory-abstract)*

<hr />

### Class: \Creational\AbstractFactory\Handler

> Class Handler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMessage(</strong><em>[\Creational\AbstractFactory\AbstractFactory](#class-creationalabstractfactoryabstractfactory-abstract)</em> <strong>$factory</strong>, <em>\string</em> <strong>$content</strong>)</strong> : <em>string</em> |

<hr />

### Class: \Creational\AbstractFactory\JsonMessage

> Class JsonMessage

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContent()</strong> : <em>string</em> |

*This class extends [\Creational\AbstractFactory\AbstractMessage](#class-creationalabstractfactoryabstractmessage-abstract)*

<hr />

### Class: \Creational\AbstractFactory\AbstractMessage (abstract)

> Class AbstractMessage

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$content</strong>)</strong> : <em>void</em><br /><em>AbstractMessage constructor.</em> |
| public | <strong>abstract getContent()</strong> : <em>string</em> |

<hr />

### Class: \Creational\AbstractFactory\XMLMessage

> Class XMLMessage

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContent()</strong> : <em>string</em> |

*This class extends [\Creational\AbstractFactory\AbstractMessage](#class-creationalabstractfactoryabstractmessage-abstract)*

