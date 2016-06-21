<?php

Use Domain\SmartPhone;
Use Domain\NonSmartPhone;
Use Domain\Tablet;

class Mobile
{
   
   function __construct( 
                            Mobile\Domain\SmartPhone $smart_phone,
                            Mobile\Domain\NonSmartPhone $non_smart_phone,
                            Mobile\Domain\Tablet $tablet
                        )
    {
        
        $this->smart_phone = $smart_phone;
        $this->non_smart_phone = $non_smart_phone;
        $this->tablet = $tablet;
    }
    public function index()
    {   
        public $phone;
        protected $array = array(
                                'status' =>'new',
                                'type'  => 'smartphone'
                                // 'screen' => '7*4inch',
                                // 'battery' => '3500mah',
                                // 'name' => 'galaxy',
                                // 'company' => 'samsung',
                                // 'mode' => 'gsm',
                                // 'os' => '6.0',
                                // 'processor' => 'quad core 1.7gz',
                                // 'memory' => '16gb',
                                // 'body' => 'rigid',
            );
        protected $old_array = array(
                                'status' =>'old',
                                'type'  => 'smartphone',
                                'change' => 'screen'
                                
            );

        if($array['type']=='smartphone'){


            if($array['status']=='new'){
                $phone=$this->smart_phone->detail($array);
            }
            else
                $phone=$this->smart_phone->edit_specification($old_array);
            
        }

      if($array['type']=='nonsmartphone'){


            if($array['status']=='new'){
                $phone=$this->non_smart_phone->detail($array);
            }
            else
                $phone=$this->non_smart_phone->edit_specification($old_array);
            
        }
        if($array['type']=='tablet'){


            if($array['status']=='new'){
                $phone=$this->tablet->detail($array);
            }
            else
                $phone=$this->tablet->edit_specification($old_array);
            
        }

        return $phone;

    }

}