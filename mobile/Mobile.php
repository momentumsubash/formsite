<?php

Use Domain\SmartPhone;
Use Domain\NonSmartPhone;
Use Domain\Tablet;

class Mobile
{
   
    public function index()
    {
        protected $array = array(
                                'status' =>'new',
                                'type'  => 'smartphone',
                                'screen' => '7*4inch',
                                'battery' => '3500mah',
                                'name' => 'galaxy',
                                'company' => 'samsung',
                                'mode' => 'gsm',
                                'os' => '6.0',
                                'processor' => 'quad core 1.7gz',
                                'memory' => '16gb',
                                'body' => 'rigid',
            );

        if($array['type']=='smartphone'){


            if($array['status']=='new'){
                SmartPhone::detail($array);
            }
            else
                SmartPhone::edit_specification($array);
            
        }

      if($array['type']=='nonsmartphone'){


            if($array['status']=='new'){
                NonSmartPhone::detail($array);
            }
            else
                NonSmartPhone::edit_specification($array);
            
        }
        if($array['type']=='tablet'){


            if($array['status']=='new'){
                Tablet::detail($array);
            }
            else
                Tablet::edit_specification($array);
            
        }



        
    }

}