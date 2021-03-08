<?php
    class BanditManchot{
        public function winOrLose(){
            $rdm = rand(1,2);
            if($rdm == 1){
                
                return true;
            }else{
                
                return false;
            }
        }

        public function howManyWeWinOrLose(){
            
            return rand(1,10);

            
        }
    }
?>