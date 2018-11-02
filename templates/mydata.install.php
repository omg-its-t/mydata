<?php
/* creates the table in the db - mydata is the table name */
function mydata_schema() {
  $schema['mydata'] = array(
    'fields' => array(
      'id'=>array(
        'type'=>'serial',
        'not null' => TRUE,
      ),
      'name'=>array(
        'type' => 'varchar',
        'length' => 40,
        'not null' => TRUE,
      ),
      'mobilenumber'=>array(
        'type' => 'varchar',
        'length' => 40,
        'not null' => TRUE,
      ),
      'email'=>array(
        'type' => 'varchar',
        'length' => 40,
        'not null' => TRUE,
        ),
      'age'=>array(
        'type' => 'varchar',
        'length' => 25,
        'not null' => TRUE,
      ),
      'gender'=>array(
        'type' => 'varchar',
        'length' => 40,
        'not null' => TRUE,
      ),
      'website'=>array(
        'type' => 'varchar',
        'length' => 25,
        'not null' => TRUE,
      ),
    ),
    'primary key' => array('id'),
  );
  return $schema;
}