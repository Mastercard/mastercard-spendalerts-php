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
			case "4c78ef64-5fb1-42c6-ae6f-93a2a0e67daf":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "delete", array(), array());
			case "a1ceef71-223b-4c8b-8cc8-4c250b867f9c":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "query", array(), array());
			case "011067e5-422f-404d-97dd-01d10e80e046":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/transactionamount", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type Amount by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Amount of the response.
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
		return self::execute("4c78ef64-5fb1-42c6-ae6f-93a2a0e67daf", new Amount($map));
	}

   /**
	* Delete this object of type Amount
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Amount of the response.
	*/
	public function delete()
	{
		return self::execute("4c78ef64-5fb1-42c6-ae6f-93a2a0e67daf", $this);
	}







	/**
	 * Query objects of type Amount by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Amount of the response
	 */
	public static function query($criteria)
	{
		return self::execute("a1ceef71-223b-4c8b-8cc8-4c250b867f9c",new Amount($criteria));
	}
   /**
	* Creates object of type Amount
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Amount of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("011067e5-422f-404d-97dd-01d10e80e046", new Amount($map));
	}







}

