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
class Channel extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "9f8efc4e-59b1-4b17-9b7b-da80eed94639":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "query", array(), array());
            case "46a6f908-ed02-4f76-9bd6-e308bd9db1f8":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "create", array(), array());
            case "9dc4561e-f831-4b41-b102-37f7d15d234c":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type Channel by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function query($criteria)
    {
        return self::execute("9f8efc4e-59b1-4b17-9b7b-da80eed94639",new Channel($criteria));
    }
   /**
    * Creates object of type Channel
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Channel of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("46a6f908-ed02-4f76-9bd6-e308bd9db1f8", new Channel($map));
    }








   /**
    * Delete object of type Channel by id
    *
    * @param String id
    * @return Channel of the response of the deleted instance.
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
        return self::execute("9dc4561e-f831-4b41-b102-37f7d15d234c", new Channel($map));
    }

   /**
    * Delete this object of type Channel
    *
    * @return Channel of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("9dc4561e-f831-4b41-b102-37f7d15d234c", $this);
    }




}

