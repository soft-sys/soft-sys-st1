<?php
class mysqlfunctions{ private $firskey,$secondkey,$thirdkey; public function __construct(){$this->firskey='yVnfm45Ovz3Wa24BduGpa/65f8ic+4Ra1JNxnzLr/YE=';$this->secondkey='rUzIwcF/ysZhOuCl2YKPFYOA2dXkHjTJXSxdEe3U2Me1fCEHcz9TgfT09GpH6kSBZpxpAvFbljz9T0q7f9lIhA==';$this->thirdkey='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
tagL';} public function hashpasswordsha1($password){return sha1($password);} public function securedEncrypt($param){try{$key=$this->thirdkey;$plaintext=$param;$ivlen=openssl_cipher_iv_length($cipher="AES-256-CBC");$iv=openssl_random_pseudo_bytes($ivlen);$ciphertext_raw=openssl_encrypt($plaintext,$cipher,$key,$options=OPENSSL_RAW_DATA,$iv);$hmac=hash_hmac('sha256',$ciphertext_raw,$key,$as_binary=true);$ciphertext=base64_encode($iv.$hmac.$ciphertext_raw);return $ciphertext;}catch(Exception$ex){return $ex->getMessage();}} public function securedDecrypt($param){try{$key=$this->thirdkey;$c=base64_decode($param);$ivlen=openssl_cipher_iv_length($cipher="AES-256-CBC");$iv=substr($c,0,$ivlen);$hmac=substr($c,$ivlen,$sha2len=32);$ciphertext_raw=substr($c,$ivlen+$sha2len);$original_plaintext=openssl_decrypt($ciphertext_raw,$cipher,$key,$options=OPENSSL_RAW_DATA,$iv);$calcmac=hash_hmac('sha256',$ciphertext_raw,$key,$as_binary=true);if(hash_equals($hmac,$calcmac)){return $original_plaintext;}}catch(Exception$ex){return $ex->getMessage();}} public function securedEncryptBase($param){try{$publickey="file://".dirname(dirname(__FILE__))."/ssl/sislab.pem";openssl_public_encrypt($param,$encrypt,$publickey);$encrypt64=base64_encode($encrypt);return $encrypt64;}catch(Exception$ex){return $ex->getMessage();}} public function securedDecryptBase($param){try{$fp=fopen("../ssl/sislabkey.pem","r");$privatekey=fread($fp,8192);fclose($fp);$encrypt=base64_decode($param);$res=openssl_get_privatekey($privatekey,"labsis");openssl_private_decrypt($encrypt,$decrypt,$res);$decrypt=$decrypt;return $decrypt;}catch(Exception$ex){return $ex->getMessage();}}}