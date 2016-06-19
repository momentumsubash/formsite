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

            $smartphone= new SmartPhone();

            if($array['status']=='new'){
                
                $smartphone->detail($array);
            }
            else
                $smartphone->edit_specification($array);
            
        }

      if($array['type']=='nonsmartphone'){

            $non_smartphone= new NonSmartPhone();
            if($array['status']=='new'){
                $non_smartphone->detail($array);
            }
            else
                $non_smartphone->edit_specification($array);
            
        }
        if($array['type']=='tablet'){

            $tablet= new Tablet();

            if($array['status']=='new'){
                $tablet->detail($array);
            }
            else
                $tablet->edit_specification($array);
            
        }



        
    }

}