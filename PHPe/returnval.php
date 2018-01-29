<?php
# returnval.php
$a = array('akey'=>'aval');
function &pass(&$param) {
  return $param;
}
function duplicate(&$param) {
  return $param;
}
$b = &pass($a);
$c = duplicate($a);
$c['akey'] = 'cval';
echo "After changing in c:<br />";
echo "value in a=".$a['akey']."<br />"; // display 'aval'
echo "value in c=".$c['akey']."<br />"; // display 'cval'
$b['akey'] = 'bval';
echo "After changing in b:<br />";
echo "value in a=".$a['akey']."<br />"; // display 'bval'
?>
