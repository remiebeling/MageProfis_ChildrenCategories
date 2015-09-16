<?php
$installer = $this;
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer->startSetup();

$attribute = Mage::getModel('eav/config')->getAttribute('catalog_category', 'description');
$entityTypeId     = $installer->getEntityTypeId('catalog_category');

$installer->addAttribute('catalog_category', 'show_in_parent',  array(
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Show in parent category',
    'source'        => 'eav/entity_attribute_source_boolean',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
    'used_in_product_listing'      => true,
    'user_defined'      => false,
    'default'           => null,
));

$installer->addAttribute('catalog_category', 'parent_position',  array(
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'Position in parent category',
    'source'        => 'eav/entity_attribute_source_boolean',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
    'used_in_product_listing'      => true,
    'user_defined'      => false,
    'default'           => null,
));

$this->addAttribute('catalog_category', 'category_thumbnail', array(
    'type'          => 'varchar',
    'input'         => 'image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'label'         => 'Thumbnail',
    'visible'       => 1,
    'required'      => 0,
    'user_defined'  => 1,
    'frontend_input'=>'',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible_on_front'  => 1,
     'used_in_product_list'    => 1,
));
// get group sort_oder from Attr: Description
$select = $this->getConnection()->select()
    ->from($this->getTable('eav/entity_attribute'))
    ->where('entity_type_id = ?',$entityTypeId)
    ->where('attribute_id = ?', $attribute->getId());
$item = $this->getConnection()->fetchRow($select);

$installer->addAttributeToGroup(
    $item['entity_type_id'],
    $item['attribute_set_id'],
    $item['attribute_group_id'],
    'show_in_parent',
    99
);
$installer->addAttributeToGroup(
    $item['entity_type_id'],
    $item['attribute_set_id'],
    $item['attribute_group_id'],
    'parent_position',
    100
);
$installer->addAttributeToGroup(
    $item['entity_type_id'],
    $item['attribute_set_id'],
    $item['attribute_group_id'],
    'category_thumbnail',
    110
);
$installer->endSetup();