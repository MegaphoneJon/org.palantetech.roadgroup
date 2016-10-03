<?php

class CRM_Roadgroup_BAO_RoadGroup extends CRM_Roadgroup_DAO_RoadGroup {

  /**
   * Create a new RoadGroup based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Roadgroup_DAO_RoadGroup|NULL
   *
  public static function create($params) {
    $className = 'CRM_Roadgroup_DAO_RoadGroup';
    $entityName = 'RoadGroup';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */
}
