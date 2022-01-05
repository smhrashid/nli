<?php

class Agent_model extends CI_Model {

    public function get_agent($acode, $oc) {
        $query_agent = "select b.org_head,a.name HEAD_name,decode(a.dsgn,'10','FA','09','UM','08','BM','07','BC','06','DC','05','RC','04','DIVC') as HEAD_Desig,b.code,b.NAME,b.Desig  from ipl.organiser_ipl a, (
select b.org_head, a.code, a.NAME,decode(a.dsgn,'10','FA','09','UM','08','BM','07','BC','06','DC','05','RC','04','DIVC') as Desig
from ipl.organiser_ipl a,(
SELECT  code,
            COALESCE (LTRIM (RTRIM (FAVP)),
                      LTRIM (RTRIM (SAVP)),
                      LTRIM (RTRIM (CA)),
                      LTRIM (RTRIM (DC)),
                      LTRIM (RTRIM (AM)),
                      LTRIM (RTRIM (UM)),
                      LTRIM (RTRIM (SE))) AS org_head
                      from ipl.organiser_ipl where prj_code<>'09' and  code='$acode'
union all            
SELECT    CA code, SAVP AS org_head
                      from ipl.organiser_ipl where prj_code='09' and code='$acode') b where a.code=b.code) b where a.code=b.org_head";
        $q_agent = $this->db->query($query_agent);
        foreach ($q_agent->result() as $r_agent):
            $ORG_HEAD = $r_agent->ORG_HEAD;
            $HEAD_NAME = $r_agent->HEAD_NAME;
            $HEAD_DESIG = $r_agent->HEAD_DESIG;
            $CODE = $r_agent->CODE;
            $NAME = $r_agent->NAME;
            $DESIG = $r_agent->DESIG;
        endforeach;
        $query_office = "select SCNAME from ipl.SC_SLNO where SCCODE='$oc'";
        $q_office = $this->db->query($query_office);
        foreach ($q_office->result() as $r_office):
            $SCNAME = $r_office->SCNAME;
        endforeach;
        $agentinfo = array(
            "OFFICE" => $SCNAME,
            "ORG_HEAD" => $ORG_HEAD,
            "HEAD_NAME" => $HEAD_NAME,
            "HEAD_DESIG" => $HEAD_DESIG,
            "CODE" => $CODE,
            "NAME" => $NAME,
            "DESIG" => $DESIG
        );
        return $agentinfo;
    }

}
