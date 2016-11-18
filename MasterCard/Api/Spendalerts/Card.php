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
class Card extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "43dc7de3-de40-4cfa-ba6f-0b1c6ad6cd91":
                return new OperationConfig("/issuer/v1/card", "create", array(), array());
            case "26d9bf29-27c8-4c68-8e23-23c7e30b3d2d":
                return new OperationConfig("/issuer/v1/card/{uuid}", "create", array(), array());
            case "e9741451-d1ac-49a1-832d-ddc28f16da4e":
                return new OperationConfig("/issuer/v1/card/{uuid}", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }


   /**
    * Creates object of type Card
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Card of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("43dc7de3-de40-4cfa-ba6f-0b1c6ad6cd91", new Card($map));
    }





   /**
    * Creates object of type Card
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Card of the response of created instance.
    */
    public static function update($map)
    {
        return self::execute("26d9bf29-27c8-4c68-8e23-23c7e30b3d2d", new Card($map));
    }








   /**
    * Delete object of type Card by id
    *
    * @param String id
    * @return Card of the response of the deleted instance.
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
        return self::execute("e9741451-d1ac-49a1-832d-ddc28f16da4e", new Card($map));
    }

   /**
    * Delete this object of type Card
    *
    * @return Card of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("e9741451-d1ac-49a1-832d-ddc28f16da4e", $this);
    }




}

