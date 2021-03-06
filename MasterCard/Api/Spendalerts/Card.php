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
			case "511f1b7e-c0b8-462f-863b-ddf7f4c5cdbf":
				return new OperationConfig("/issuer/v1/card", "create", array(), array());
			case "49753c58-a78f-4e11-9fd0-7cf74bdd58d5":
				return new OperationConfig("/issuer/v1/card/{uuid}", "read", array(), array());
			case "653c3a64-b0d2-4085-b825-c895cb992184":
				return new OperationConfig("/issuer/v1/card/uuid", "create", array(), array());
			case "aa288e98-229f-42ff-8cf5-931768936259":
				return new OperationConfig("/issuer/v1/card/{uuid}", "delete", array(), array());
			case "efb9a5d9-195f-4a2a-bca1-5f55e076b9c5":
				return new OperationConfig("/issuer/v1/card/{uuid}", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("511f1b7e-c0b8-462f-863b-ddf7f4c5cdbf", new Card($map));
	}









	/**
	 * Returns objects of type Card by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Card of the response
	 */
	public static function retrievePan($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("49753c58-a78f-4e11-9fd0-7cf74bdd58d5",new Card($map));
	}

   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function read($map)
	{
		return self::execute("653c3a64-b0d2-4085-b825-c895cb992184", new Card($map));
	}








   /**
	* Delete object of type Card by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Card of the response.
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
		return self::execute("aa288e98-229f-42ff-8cf5-931768936259", new Card($map));
	}

   /**
	* Delete this object of type Card
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Card of the response.
	*/
	public function delete()
	{
		return self::execute("aa288e98-229f-42ff-8cf5-931768936259", $this);
	}


   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function update($map)
	{
		return self::execute("efb9a5d9-195f-4a2a-bca1-5f55e076b9c5", new Card($map));
	}







}

