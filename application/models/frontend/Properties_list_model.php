<?php
class Properties_list_model extends CI_Model
{

    public function getAll($arr, $limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');
        $bank_installment = $this->input->get('bank_installment');


        $reorder = $arr['reorder'];
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');


        $table_where = $arr['propertie_type'];
        if ($table_where == 'for_sale') {
            $table_where = array('for_sale', 'by_owner_for_sale');
        } elseif ($table_where == 'for_rent') {
            $table_where = array('for_rent', 'by_owner_for_rent', 'hostel');
        } else {
            $table_where = $arr['propertie_type'];
        }


        if ($keyword) {
            $this->db->where(array('ad_status' => 1, 'ad_number' => $keyword));
        } else {


            $this->db->where_in('propertie_type', $table_where);
            $this->db->where(array('ad_status' => 1));

            // Filter Search
            if (!empty($region_id)) {
                $this->db->where(array('ad_status' => 1, 'properties.region_id' => $region_id));
            }


            if (!empty($township_id)) {
                $this->db->where(array('ad_status' => 1, 'properties.sale_township_id' => $township_id));
            }

            if (!empty($property_type_id)) {
                $this->db->where(array('ad_status' => 1, 'properties.sale_property_type' => $property_type_id));
            }

            if (!empty($price_from) || !empty($price_to)) {
                $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
            }

            if (!empty($bank_installment)) {
                if ($bank_installment == 'All') {
                } else {
                    $this->db->where(array('ad_status' => 1, 'installment' => $bank_installment));
                }
            }
            // Filter Search
        }


        // Sort By
        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        } elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        } elseif ($reorder == 'low_to_hight') {
            $this->db->order_by("price ", "ASC");
        } elseif ($reorder == 'hight_to_low') {
            $this->db->order_by("price ", "DESC");
        } else {
            $this->db->order_by("sale_id ", "DESC");
        }
        // Sort By

        $this->db->group_by("sale_id");
        return $this->db->get()->result();
    }



    public function count_all($arr)
    {
        $keyword = $this->input->get('keyword');
        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');
        $bank_installment = $this->input->get('bank_installment');

        $table_where = $arr['propertie_type'];
        $reorder = $arr['reorder'];

        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');

        if ($keyword) {
            $this->db->where(array('ad_status' => 1, 'ad_number' => $keyword));
        } else {
            $this->db->where(array('propertie_type' => $table_where, 'ad_status' => 1));
        }

        // Filter Search
        if (!empty($region_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.region_id' => $region_id));
        }


        if (!empty($township_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_township_id' => $township_id));
        }

        if (!empty($propertie_type)) {
            $this->db->where(array('ad_status' => 1, 'propertie_type' => $propertie_type));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_property_type' => $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        if (!empty($bank_installment)) {
            if ($bank_installment == 'All') {
            } else {
                $this->db->where(array('ad_status' => 1, 'installment' => $bank_installment));
            }
        }
        // Filter Search



        // Sort By
        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        } elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        } elseif ($reorder == 'low_to_hight') {
            $this->db->order_by("price ", "ASC");
        } elseif ($reorder == 'hight_to_low') {
            $this->db->order_by("price ", "DESC");
        } else {
            $this->db->order_by("sale_id ", "DESC");
        }
        // Sort By

        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }




    public function findPropertygetAll($arr, $limit, $offset)
    {
        $keyword = $this->input->get('keyword');

        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');
        $bank_installment = $this->input->get('bank_installment');

        $table_where = $arr['propertie_type'];
        if ($table_where == 'for_sale') {
            $table_where = array($table_where, 'by_owner_for_sale');
        } elseif ($table_where == 'for_rent') {
            $table_where = array($table_where, 'by_owner_for_rent', 'hostel');
        }

        $reorder = $arr['reorder'];
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');

        if ($keyword) {
            $this->db->where(array('ad_status' => 1, 'ad_number' => $keyword));
        } else {
            $this->db->where_in('propertie_type', $table_where);
            $this->db->where(array('ad_status' => 1));
        }

        // Filter Search
        if (!empty($region_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.region_id' => $region_id));
        }

        if (!empty($township_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_township_id' => $township_id));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_property_type' => $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        if (!empty($bank_installment)) {
            if ($bank_installment == 'All') {
            } else {
                $this->db->where(array('ad_status' => 1, 'installment' => $bank_installment));
            }
        }
        // Filter Search

        // Sort By
        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        } elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        } elseif ($reorder == 'low_to_hight') {
            $this->db->order_by("price ", "ASC");
        } elseif ($reorder == 'hight_to_low') {
            $this->db->order_by("price ", "DESC");
        } else {
            $this->db->order_by("sale_id ", "DESC");
        }
        // Sort By

        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function count_all_find_property($arr)
    {
        $keyword = $this->input->get('keyword');
        $price_from = $this->input->get('price_from');
        $price_to = $this->input->get('price_to');
        $propertie_type = $this->input->get('propertie_type');
        $property_type_id = $this->input->get('property_type_id');
        $region_id = $this->input->get('region_id');
        $township_id = $this->input->get('township_id');
        $bank_installment = $this->input->get('bank_installment');

        $table_where = $arr['propertie_type'];
        $table_where = $arr['propertie_type'];
        if ($table_where == 'for_sale') {
            $table_where = array($table_where, 'by_owner_for_sale');
        } elseif ($table_where == 'for_rent') {
            $table_where = array($table_where, 'by_owner_for_rent', 'hostel');
        }

        $reorder = $arr['reorder'];
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');

        if ($keyword) {
            $this->db->where(array('ad_status' => 1, 'ad_number' => $keyword));
        } else {
            $this->db->where_in('propertie_type', $table_where);
            $this->db->where(array('ad_status' => 1));
        }

        // Filter Search
        if (!empty($region_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.region_id' => $region_id));
        }


        if (!empty($township_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_township_id' => $township_id));
        }

        if (!empty($propertie_type)) {
            $this->db->where(array('ad_status' => 1, 'propertie_type' => $propertie_type));
        }

        if (!empty($property_type_id)) {
            $this->db->where(array('ad_status' => 1, 'properties.sale_property_type' => $property_type_id));
        }

        if (!empty($price_from) || !empty($price_to)) {
            $this->db->where("price BETWEEN '$price_from' AND '$price_to'");
        }

        if (!empty($bank_installment)) {
            if ($bank_installment == 'All') {
            } else {
                $this->db->where(array('ad_status' => 1, 'installment' => $bank_installment));
            }
        }
        // Filter Search

        // Sort By
        if ($reorder == 'old_to_new') {
            $this->db->order_by("sale_id ", "ASC");
        } elseif ($reorder == 'new_to_old') {
            $this->db->order_by("sale_id ", "DESC");
        } elseif ($reorder == 'low_to_hight') {
            $this->db->order_by("price ", "ASC");
        } elseif ($reorder == 'hight_to_low') {
            $this->db->order_by("price ", "DESC");
        } else {
            $this->db->order_by("sale_id ", "DESC");
        }
        // Sort By

        $this->db->group_by("properties_id");
        return $this->db->get()->num_rows();
    }



    public function tatnaywon_company()
    {
        $this->db->select("*");
        $this->db->from("company");
        $this->db->where('company_id', 1);
        return $this->db->get()->row();
    }

    public function get_property_type()
    {
        $this->db->select('*');
        $this->db->from('property_type');
        return $this->db->get()->result();
    }

    public function get_regions()
    {
        $this->db->select('*');
        $this->db->from('region');
        return $this->db->get()->result();
    }




    public function find_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('properties');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id ', 'Left');
        $this->db->where(array('sale_id' => $id));
        return $this->db->get()->row();
    }


    public function find_propertie_type($id)
    {
        $this->db->select('propertie_type');
        $this->db->from('properties');
        $this->db->where(array('sale_id' => $id));
        return $this->db->get()->row();
    }


    public function get_photo($id)
    {
        $this->db->select('*');
        $this->db->from('propertie_photo');
        $this->db->where(array('properties_id' => $id));
        return $this->db->get()->result();
    }


    public function recent_for_sale()
    {
        $this->db->select("*");
        $this->db->limit(10);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
        $this->db->where(array('propertie_type' => 'for_sale', 'ad_status' => 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->order_by('rand()');
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function recent_for_rent()
    {
        $this->db->select("*");
        $this->db->limit(3);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
        $this->db->where(array('propertie_type' => 'for_rent', 'ad_status' => 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }

    public function recent_for_new_properties()
    {
        $this->db->select("*");
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
        $this->db->where(array('propertie_type' => 'new_properties', 'ad_status' => 1));
        $this->db->order_by("sale_id ", "DESC");
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }



    public function properties_home_page($propertie_type)
    {
        $table_where = $propertie_type;
        $this->db->cache_on();
        $this->db->select("*");
        $this->db->order_by('rand()');
        $this->db->limit(20);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
        $this->db->where(array('propertie_type' => $table_where, 'ad_status' => 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }



    public function top_featured_properties($propertie_type, $top_featured)
    {
        $table_where = $propertie_type;
        $top_featured = $top_featured;

        $this->db->cache_on();
        $this->db->select("*");
        $this->db->order_by('rand()');
        $this->db->limit(30);
        $this->db->from("properties");
        $this->db->join('townships', 'properties.sale_township_id = townships.township_id', 'Left');
        $this->db->join('region', 'properties.region_id = region.region_id', 'Left');
        $this->db->join('property_type', 'properties.sale_property_type = property_type.property_type_id', 'Left');
        $this->db->join('user_info', 'properties.user_info_id = user_info.user_id', 'Left');
        $this->db->join('propertie_photo', 'properties.sale_id = propertie_photo.properties_id', 'Left');
        $this->db->where(array('propertie_type' => $table_where, 'top_featured' => $top_featured, 'ad_status' => 1));
        $this->db->group_by("properties_id");
        return $this->db->get()->result();
    }


    public function viewer_count_update($id)
    {
        $this->db->set('viewer_count', 'viewer_count + 1', FALSE);
        $this->db->where('sale_id', $id);
        $this->db->update('properties');
        return true;
    }
}
