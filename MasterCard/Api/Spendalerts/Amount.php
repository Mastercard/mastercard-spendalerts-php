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
class Amount extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "9cd0391a-4c39-43e6-8f8c-0307197a4664":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "query", array(), array());
            case "890fc39c-d07e-430f-aab2-a72a124de114":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "create", array(), array());
            case "645fc091-a217-45a0-93af-67306e735d98":
                return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type Amount by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function query($criteria)
    {
        return self::execute("9cd0391a-4c39-43e6-8f8c-0307197a4664",new Amount($criteria));
    }
   /**
    * Creates object of type Amount
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Amount of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("890fc39c-d07e-430f-aab2-a72a124de114", new Amount($map));
    }








   /**
    * Delete object of type Amount by id
    *
    * @param String id
    * @return Amount of the response of the deleted instance.
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
        return self::execute("645fc091-a217-45a0-93af-67306e735d98", new Amount($map));
    }

   /**
    * Delete this object of type Amount
    *
    * @return Amount of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("645fc091-a217-45a0-93af-67306e735d98", $this);
    }




}

