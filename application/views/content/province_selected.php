<section id="province">
        	<div class="container">
            	<div class="content">
                	<h3>Pelajari Dampak Buang Air Besar Sembarangan di Indonesia</h3>
                    <p>Sebagai negara dengan pelaku BABS tertinggi kedua di dunia, Indonesia terancam dampak negatif di berbagai provinsi yang bisa kamu pelajari di bawah ini.</p>
                    <div class="sliderProvinceBox">
                    	<div class="chooseProvinceBox">
                        	<div class="chooseProvince">Pilih Provinsi</div>
                            <div class="selectProvince">
                            	<select name="province" onchange="if (this.value) window.location.href=this.value">
                                	<option value = "<?php echo site_url('province'); ?>">Semua</option>
                                    <?php if($dropdown) foreach($dropdown as $list){ ?>
                                	<option value = "<?php echo site_url('province/selected/'.$list['id']); ?>" <?php if($list['id']==$this->uri->segment(3))echo "selected=\"selected\"";?> ><?php echo $list['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>  
                        </div>
                    	<ul>
                            <?php if($this->session->userdata('lang')=='id'){$description=$province['description_id'];} else {$description=$province['description_en'];} ?>
                            <?php if($this->session->userdata('lang')=='id'){$read="Lebih Lanjut";} else {$read="Read More";} ?>
                        	<li>
                            	<div class="sliderProvince">
                                	<div class="sliderProvinceRight">
                                    	<img src="<?php echo base_url() ?>userdata/daerah/<?php echo $province['image'] ?>">
                                        <div class="sprInfoBox">
                                        	<h2><?php echo $province['name'] ?></h2>
                                            <div class="sprInfo">
                                            	<h3><?php echo $description ?></h3>
                                            </div>
                                            <a href="<?php echo site_url('province/detail/'.$province['id']) ?>" class="defBtn"><?php echo $read ?></a>
                                        </div>
                                    </div>
                                    <a href="#" class="sliderProvinceLeft">
                                    	<div class="splBox">
                                        	<div class="coverPicture"><img src="<?php echo base_url()?>userdata/test2.jpg"></div>
                                        </div>
                                        <div class="splBox">
                                        	<div class="profilePicture">
                                            	<img src="<?php echo base_url()?>userdata/test3.jpg">
                                            </div>
                                            <span>Amir Budi</span>
                                            <p>Jangan rusak keindahan bumi pertiwi dengan aksi BABS. Selamatkan Indonesia dari...</p>
                                        	<div class="nextBtn"><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                           
            
                        </ul>
                        <div class="loadMore">
                        	Load More
                        </div>
                    </div>
                </div>
            </div>
</section>