<?php

class Hash {

    /*
     * This class will have static function so that we can call it anywhere
     */
    //Hash::Create('md5','passwordhere','SaltIfThereIsOne');
    
    /**
     * 
     * @param string $algo - The algorithm (md5, sha1, sha256, whirlpool, etc)
     * @param string $data - The data(password) to encode  
     * @param string $salt - The salt (This should be same throughout the system probably)
     * @return string (The hashed/salted data)
     */
    
    /*
     * The hash is always 128 bits. If you encode it as a hexdecimal string you can encode 
     * 4 bits per character, giving 32 characters. MD5 is not encryption
     */
    
    public static function create($algo, $data, $salt){
        
        $context = hash_init($algo, HASH_HMAC, $salt);//$salt => $key
        hash_update($context, $data);
        
        return hash_final($context);
    }
    
}