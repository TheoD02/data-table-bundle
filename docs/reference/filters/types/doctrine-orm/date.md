---
label: Date
order: d
tags:
  - filters
  - doctrine orm
---

# Date filter type

The `DateFilterType` represents a filter that operates on date values.

+---------------------+--------------------------------------------------------------+
| Parent type         | [DoctrineOrmFilterType](doctrine-orm.md)
+---------------------+--------------------------------------------------------------+
| Class               | [:icon-mark-github: DateFilterType](https://github.com/Kreyu/data-table-bundle/blob/main/src/Filter/Type/DateFilterType.php)
+---------------------+--------------------------------------------------------------+
| Form Type           | [DateType](https://symfony.com/doc/current/reference/forms/types/date.html)
+---------------------+--------------------------------------------------------------+
| Supported operators | Equals, NotEquals, GreaterThan, GreaterThanEquals, LessThan, LessThanEquals
+---------------------+--------------------------------------------------------------+
| Default operator    | Equals
+---------------------+--------------------------------------------------------------+

## Options

This filter type has no additional options.

## Inherited options

{{ option_form_type_default_value = '`\'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType\'`' }}

{% capture option_empty_data_note %}
If form option `widget` equals `'choice'` or `'text'` then the normalizer changes default value to:
```
[
    'day' => '', 
    'month' => '', 
    'year' => ''
]
```
{% endcapture %}

{{ include '../_filter_options' }}
{{ include '_doctrine_orm_filter_options' }}
