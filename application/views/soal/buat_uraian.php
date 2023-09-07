<div class="row">
    <div class="col-sm-12">    
        <?=form_open_multipart('soal/save_uraian', array('id'=>'formsoal'), array('method'=>'add'));?>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group col-sm-12">
                            <label>Dosen (Mata Kuliah)</label>
                            <?php if ($this->ion_auth->is_admin()) : ?>
                            <select name="dosen_id" required="required" id="dosen_id" class="select2 form-group" style="width:100% !important">
                                <option value="" disabled selected>Pilih Dosen</option>
                                <?php foreach ($dosen as $d) : ?>
                                    <option value="<?=$d->id_dosen?>:<?=$d->matkul_id?>"><?=$d->nama_dosen?> (<?=$d->nama_matkul?>)</option>
                                <?php endforeach; ?>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('dosen_id')?></small>
                            <?php else : ?>
                            <input type="hidden" name="dosen_id" value="<?=$dosen->id_dosen;?>">
                            <input type="hidden" name="matkul_id" value="<?=$dosen->matkul_id;?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?=$dosen->nama_dosen; ?> (<?=$dosen->nama_matkul; ?>)">
                            <?php endif; ?>
                        </div>
                        
                        <div class="col-sm-12">
                            <label for="soal" class="control-label">Soal Uraian</label>
                            <div class="form-group">
                                <textarea name="soal_uraian" id="soal_uraian" class="form-control summernote"><?=set_value('soal_uraian')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('soal_uraian')?></small>
                            </div>
                        </div>

                        <!-- Bobot Soal Uraian -->
                        <div class="form-group col-sm-12">
                            <label for="bobot_uraian" class="control-label">Bobot Soal Uraian</label>
                            <input required="required" value="1" type="number" name="bobot_uraian" placeholder="Bobot Soal Uraian" id="bobot_uraian" class="form-control">
                            <small class="help-block" style="color: #dc3545"><?=form_error('bobot_uraian')?></small>
                        </div>

                        <div class="form-group pull-right">
                            <a href="<?=base_url('soal')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
</div>

