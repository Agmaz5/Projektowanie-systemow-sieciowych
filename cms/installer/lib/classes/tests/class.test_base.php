<?php

namespace __appbase\tests;

function test_extension_loaded($name) : bool
{
  $a = \extension_loaded(\strtoupper($name));
  $b = \extension_loaded(\strtoupper($name));
  return $a || $b;
}


function test_apache_module($name)
{
  if( !$name ) return FALSE;
  if( !\function_exists('apache_get_modules') ) return FALSE;
  $modules = \apache_get_modules();
  if( \in_array($name, $modules) ) return TRUE;
  return FALSE;
}


function test_is_false($val)
{
  return (FALSE == \__appbase\utils::to_bool($val));
}


function test_is_true($val)
{
  return (TRUE == \__appbase\utils::to_bool($val));
}


function test_remote_file($url,$timeout = 3,$searchString = '') : bool
{
  $timeout = \max(1, \min(360, $timeout));
  $req = new \__appbase\http_request;
  $req->setTarget($url);
  $req->setTimeout($timeout);
  $req->execute();
  if(200 != $req->getStatus()) return FALSE;
  if( $searchString && FALSE === \strpos($req->getResult(), $searchString)) return FALSE;
  return TRUE;
}

#[\AllowDynamicProperties]
abstract class test_base
{
  const TEST_UNTESTED = 'test_untested';
  const TEST_PASS     = 'test_pass';
  const TEST_FAIL     = 'test_fail';
  const TEST_WARN     = 'test_warn';

  private static $_keys = [
    'name', 'name_key', 'status', 'value', 'required', 'minimum', 'maximum', 'recommended', 'pass_key', 'pass_msg', 'fail_msg',
    'fail_key', 'warn_key', 'warn_msg', 'msg_key', 'msg'
  ];
  private $_data = [];

  public function __construct($name,$value,$key = '')
  {
    if( !$name ) throw new \RuntimeException(\__appbase\lang('error_test_name'));
    $this->name = $name;
    $this->name_key = $name;
    $this->value = $value;
    if( $key ) $this->name_key = $key;
    $this->status = self::TEST_UNTESTED;
    $this->required = 0;
  }

  public function __get($key)
  {
    if( !\in_array($key, self::$_keys) ) throw new \RuntimeException(\__appbase\lang('error_invalidkey', $key, __CLASS__));
    if( isset($this->_data[$key]) ) return $this->_data[$key];
  }

  public function __isset($key)
  {
    if( !\in_array($key, self::$_keys) ) throw new \RuntimeException(\__appbase\lang('error_invalidkey', $key, __CLASS__));
    return isset($this->_data[$key]);
  }

  public function __set($key,$value)
  {
    if( !\in_array($key, self::$_keys) ) throw new \RuntimeException(\__appbase\lang('error_invalidkey', $key, __CLASS__));
    if(NULL === $value || '' === $value)
    {
      unset($this->_data[$key]);
      
      return;
    }

    $this->_data[$key] = $value;
  }

  public function __unset($key)
  {
    if( !\in_array($key, self::$_keys) ) throw new \RuntimeException(\__appbase\lang('error_invalidkey', $key, __CLASS__));
    unset($this->_data[$key]);
  }

  abstract public function execute();

  public function run()
  {
    $res = $this->execute();
    switch( $res ) {
    case self::TEST_PASS:
    case self::TEST_FAIL:
    case self::TEST_WARN:
      $this->status = $res;
      break;

    case self::TEST_UNTESTED:
    default:
      throw new \RuntimeException(\__appbase\lang('error_test_invalidresult') . ' ' . $res);
    }

    return $this->status;
  }

  public function msg()
  {
    if( $this->msg ) return $this->msg;
    if( $this->msg_key ) return $this->msg_key;

    switch( $this->status ) {
    case self::TEST_PASS:
      if( $this->pass_msg ) return $this->pass_msg;
      if( $this->pass_key ) return \__appbase\lang($this->pass_key);
      break;

    case self::TEST_FAIL:
      if( $this->fail_msg ) return $this->fail_msg;
      if( $this->fail_key ) return \__appbase\lang($this->fail_key);
      break;

    case self::TEST_WARN:
      if( $this->warn_msg ) return $this->warn_msg;
      if( $this->warn_key ) return \__appbase\lang($this->warn_key);
      break;

    default:
      throw new \Exception(\__appbase\lang('error_test_invalidstatus'));
    }
  }

  protected function returnBytes($val)
  {
      if(\is_string($val) && '' != $val) {
          $val = \trim($val);
          $last = \strtolower(\substr($val, -1));
          $val = (float) \substr($val, 0, -1);
          switch($last) {
          case 'g':
              $val *= 1024.0;
          case 'm':
              $val *= 1024.0;
          case 'k':
              $val *= 1024.0;
          }
      }

      return $val;
  }
} // end of class

?>