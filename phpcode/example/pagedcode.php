<?php

public function getSearchDoctorInfo($doctorName,$userId,$patientCaseId,$pageId,$pageSize)
{/*{{{*/
 $total = 210;
 $pages = ceil($total/$pageSize);
 $pageId = $pageId - 1;
 $nowpage = ($pageId > $pages)?-1:$pageId;
 if($nowpage == -1)
 {
 
 $this->content = array();
 $this->pageInfo = array();
 return ;
 }
 $doctorInfo = array();
 for ($i=1; $i<=(($total-$pageSize*$nowpage)>$pageSize?$pageSize:$total-$pageSize*$nowpage); $i++)
 {
 $a = $i+($pageSize * $nowpage);
 $doctorInfo[] = array(
 'doctorName'=>'����'.$a,
 'professionalTitle'=>'����ҽʦ',
 'headPortrait'=>'http://n1.hdfimg.com/g6/M00/0C/D7/sIYBAFQJwHqAK4GrAACM2Y788CM233.jp
 g',
 'hospital'=>'���Բ��Բ��Բ��Բ��Բ��Բ��Բ��Ա���Э��ҽԺ',
 'section'=>'����',
 'isHaveShare'=>0,
 'spaceid'=>$i);
 }

 $pageInfo = array(
 "pages"=>$pages,
 "pagesize"=>$pageSize,
 "nowpage"=>$nowpage+1,
 "total"=>$total);
 $this->content = $doctorInfo;
 $this->pageInfo = $pageInfo;
}/*}}}*/
