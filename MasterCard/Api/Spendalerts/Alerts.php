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
class Alerts extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "a34e9fb3-9c0e-4aa3-a963-451d673d5cb7":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "delete", array(), array());
			case "465b5a91-19aa-4f6e-8a1a-3c844a1d4b8e":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "query", array(), array());
			case "d32373d4-95d9-4293-9dd8-dcd9da85aa2f":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}





   /**
	* Delete object of type Alerts by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alerts of the response.
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
		return self::execute("a34e9fb3-9c0e-4aa3-a963-451d673d5cb7", new Alerts($map));
	}

   /**
	* Delete this object of type Alerts
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Alerts of the response.
	*/
	public function delete()
	{
		return self::execute("a34e9fb3-9c0e-4aa3-a963-451d673d5cb7", $this);
	}







	/**
	 * Query objects of type Alerts by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Alerts of the response
	 */
	public static function query($criteria)
	{
		return self::execute("465b5a91-19aa-4f6e-8a1a-3c844a1d4b8e",new Alerts($criteria));
	}
   /**
	* Creates object of type Alerts
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Alerts of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("d32373d4-95d9-4293-9dd8-dcd9da85aa2f", new Alerts($map));
	}







}

