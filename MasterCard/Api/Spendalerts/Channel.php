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
			case "9cb99844-1a12-4310-a9a3-60752a842ae9":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "delete", array(), array());
			case "5639680a-5e29-4781-b56e-31fb5526cc16":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "query", array(), array());
			case "cbc247de-0e4f-47b6-a0b8-574d622a0ac1":
				return new OperationConfig("/issuer/v1/card/{uuid}/controls/alerts/channels", "create", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}





   /**
	* Delete object of type Channel by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Channel of the response.
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
		return self::execute("9cb99844-1a12-4310-a9a3-60752a842ae9", new Channel($map));
	}

   /**
	* Delete this object of type Channel
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Channel of the response.
	*/
	public function delete()
	{
		return self::execute("9cb99844-1a12-4310-a9a3-60752a842ae9", $this);
	}







	/**
	 * Query objects of type Channel by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Channel of the response
	 */
	public static function query($criteria)
	{
		return self::execute("5639680a-5e29-4781-b56e-31fb5526cc16",new Channel($criteria));
	}
   /**
	* Creates object of type Channel
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Channel of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("cbc247de-0e4f-47b6-a0b8-574d622a0ac1", new Channel($map));
	}







}

