<? 
  /** READ ME
    $to_encrypt: Is the simple array or variable that you want to encrypt/decrypt
    $table: Is the name of the table you wanna pass, that's on your db,
    you can remove this variable if you want
    
    Obs.:
      - $k is the index of the array you pass
      - Crypto::md5 is an example class that has a method to encrypt/decrypt,
      you have to change it for your own class or function that encrypts/decrypts
      - update_uncrypteds() is an example function to pass the already processed
      array, you have to change it for your own function or method
  **/
  
  /**  function that crypts or decrypts **/
  private function crypt_decrypt($to_encrypt, $table) {
    if($this->params['post']['do']){
      $do_it = $this->params['post']['do'];
      if($do_it == "yes"){
        if(is_array ($to_encrypt)){
          $new_arr = array();
          foreach(array_keys($to_encrypt) as $k){
            $new = Crypto::md5($to_encrypt[$k]); 
            $new_arr[$k] = $new;
          }
        }else{
          $new = Crypto::md5($to_encrypt);
          $new_arr = $new;
        }
      }else{
        $new_arr = 'No hace falta encriptar';
      }
      $this->update_uncrypteds($new_arr, $table);
    }
  } 
  
  /** Example function **/
  private function update_uncrypteds($crypted, $table){
    /*you should check whether you processed an array or not, 
    but it may or may not be necessary, depending on what you're doing */
    if(is_array($crypted)){ 
      //do something
      /*here you can update the table you want or pass
      the array to another function*/
    }else{
      //do something
      /*here you can update the table you want or pass
      the array to another function*/
    }
  }
?>
