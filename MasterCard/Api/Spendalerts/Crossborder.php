<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Spendalerts;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Crossborder extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "a2846c6f-d28c-4c44-a86a-7ac058d2a279":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/crossborder", "query", array(), array());
            case "fdae4084-ed83-4ec5-9c16-64acaf039de1":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/crossborder", "create", array(), array());
            case "d7012de9-e086-494b-9bcc-440144432123":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/crossborder", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type Crossborder by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function query($criteria)
    {
        return self::execute("a2846c6f-d28c-4c44-a86a-7ac058d2a279",new Crossborder($criteria));
    }
   /**
    * Creates object of type Crossborder
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Crossborder of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("fdae4084-ed83-4ec5-9c16-64acaf039de1", new Crossborder($map));
    }








   /**
    * Delete object of type Crossborder by id
    *
    * @param String id
    * @return Crossborder of the response of the deleted instance.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("d7012de9-e086-494b-9bcc-440144432123", new Crossborder($map));
    }

   /**
    * Delete this object of type Crossborder
    *
    * @return Crossborder of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("d7012de9-e086-494b-9bcc-440144432123", $this);
    }




}

