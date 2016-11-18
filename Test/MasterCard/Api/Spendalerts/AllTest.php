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

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class AllTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
                
        public function test_101_example_cardregister_postrequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("accountNumber", "5528337116291525");
            
            
            $response = Card::create($map);

            $ignoreAssert = array();
            $ignoreAssert[] = "uuid";
            
            $this->customAssertEqual($ignoreAssert, $response, "uuid", '5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg');
            

            self::putResponse("example_cardregister_postrequest", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
                
        public function test_102_example_cardrverify_postrequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("accountNumber", "5528337116291525");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Verify::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_cardrverify_postrequest", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
                
        public function test_103_example_cardupdate_postrequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("accountNumber", "5528337116291525");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Card::update($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_cardupdate_postrequest", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
                
        public function test_104_example_controls_resource_post()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("controls.alerts[0].type", "transactionAmount");
            $map->set("controls.alerts[0].amount", "500.00");
            $map->set("controls.alerts[1].type", "channels");
            $map->set("controls.alerts[1].channels[0]", "ECOM");
            $map->set("controls.alerts[1].channels[1]", "MOTO");
            $map->set("controls.alerts[2].type", "crossBorder");
            $map->set("controls.declines[0].type", "cardDisable");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Controls::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_controls_resource_post", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_105_example_controls_resource_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Controls::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[0].type", 'channels');
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[0].channels[0]", 'ECOM');
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[0].channels[1]", 'MOTO');
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[1].type", 'transactionAmount');
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[1].amount", '500.00');
            $this->customAssertEqual($ignoreAssert, $response, "controls.alerts[2].type", 'crossBorder');
            

            self::putResponse("example_controls_resource_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_106_example_controls_resource_delete()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Controls::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_controls_resource_delete", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_107_example_alerts_resource_post()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("alerts[0].type", "transactionAmount");
            $map->set("alerts[0].amount", "500.00");
            $map->set("alerts[1].type", "channels");
            $map->set("alerts[1].channels[0]", "ECOM");
            $map->set("alerts[1].channels[1]", "MOTO");
            $map->set("alerts[2].type", "crossBorder");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Alerts::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_alerts_resource_post", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_108_example_alerts_resource_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Alerts::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "alerts[0].type", 'channels');
            $this->customAssertEqual($ignoreAssert, $response, "alerts[0].channels[0]", 'ECOM');
            $this->customAssertEqual($ignoreAssert, $response, "alerts[0].channels[1]", 'MOTO');
            $this->customAssertEqual($ignoreAssert, $response, "alerts[1].type", 'transactionAmount');
            $this->customAssertEqual($ignoreAssert, $response, "alerts[1].amount", '500.00');
            $this->customAssertEqual($ignoreAssert, $response, "alerts[2].type", 'crossBorder');
            

            self::putResponse("example_alerts_resource_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_109_example_alerts_resource_delete()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Alerts::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_alerts_resource_delete", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_110_example_channel_resource_post()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("channels[0]", "ATM");
            $map->set("channels[1]", "POS");
            $map->set("channels[2]", "ECOM");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Channel::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_channel_resource_post", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_111_example_channel_resource_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Channel::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "type", 'channels');
            $this->customAssertEqual($ignoreAssert, $response, "channels[0]", 'ATM');
            $this->customAssertEqual($ignoreAssert, $response, "channels[1]", 'POS');
            $this->customAssertEqual($ignoreAssert, $response, "channels[2]", 'ECOM');
            

            self::putResponse("example_channel_resource_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_112_example_channel_resource_delete()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Channel::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_channel_resource_delete", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_113_example_crossborder_post()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Crossborder::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_crossborder_post", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_114_example_crossborder_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Crossborder::query($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_crossborder_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_115_example_crossborder_delete()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Crossborder::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_crossborder_delete", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_116_example_amount_post()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("amount", "10.00");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Amount::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_amount_post", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_117_example_amount_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Amount::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "type", 'transactionAmount');
            $this->customAssertEqual($ignoreAssert, $response, "amount", '10.00');
            

            self::putResponse("example_amount_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_118_example_amount_delete()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Amount::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_amount_delete", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_119_example_declines_postrequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("declines[0].type", "cardDisable");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Declines::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_declines_postrequest", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_120_example_declines_deleterequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            $map->set("declines[0].type", "cardDisable");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Declines::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_declines_deleterequest", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
    
                
        public function test_121_example_carddisable_postrequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Carddisable::create($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_carddisable_postrequest", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
                

        public function test_122_example_carddisable_get()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Carddisable::query($map);

            $ignoreAssert = array();
            
            

            self::putResponse("example_carddisable_get", $response);
            self::resetAuthentication();
        }
        
    
    
    
    
    
    
                

        public function test_200_example_cardregister_deleterequest()
        {
            

            self::setAuthentication("default2");

            $map = new RequestMap();
            $map->set("uuid", "5tcTMLIqEg88gN6ClBGqH2TYDQuBDLT4ey5zjQQ7alg");
            
            $map->set("uuid", self::resolveResponseValue("example_cardregister_postrequest.uuid"));
            
            $response = Card::deleteById("", $map);
            $this->assertNotNull($response);

            $ignoreAssert = array();
            
            

            self::putResponse("example_cardregister_deleterequest", $response);
            self::resetAuthentication();
        }
        

    
    
    
    
}



