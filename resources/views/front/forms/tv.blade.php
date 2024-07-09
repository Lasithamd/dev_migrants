 <fieldset>
  <legend>Basic information:</legend>

<div class="row form-group select-condition">
    <label class="col-sm-2">Condition<span class="required">*</span></label>
    <div class="col-sm-9">
        <input type="radio" name="itemCon" value="new" id="new">
        <label for="new">New</label>
        <input type="radio" name="itemCon" value="used" id="used">
        <label for="used">Used</label>
    </div>
</div>
<div class="row form-group add-title">
    <label class="col-sm-2 label-title">Title<span class="required">*</span></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="text" name="title" placeholder="Title for your Ad ">
    </div>
</div>

<div class="row form-group brand-name">
    <label class="col-sm-2 label-title">Brand</label>
    <div class="col-sm-2">
       
        <select name="feature2" id="">
            <option value="Other">Other (824)</option>
            <option value="Samsung">Samsung (353)</option>
            <option value="Hisense">Hisense (231)</option>
            <option value="Abans">Abans (229)</option>
            <option value="LG">LG (184)</option>
            <option value="Sony">Sony (100)</option>
            <option value="Aiwa">Aiwa (94)</option>
            <option value="TCL">TCL (85)</option>
            <option value="Singer">Singer (81)</option>
            <option value="Innovex">Innovex (51)</option>
            <option value="JVC">JVC (41)</option>
            <option value="Panasonic">Panasonic (41)</option>
            <option value="Nikai">Nikai (36)</option>
            <option value="Skyworth">Skyworth (29)</option>
            <option value="Toshiba">Toshiba (27)</option>
            <option value="Philips">Philips (20)</option>
            <option value="Softlogic">Softlogic (19)</option>
            <option value="Haier">Haier (19)</option>
            <option value="Sharp">Sharp (16)</option>
            <option value="Atom">Atom (2)</option>
            <option value="Maxmo">Maxmo (2)</option>
            <option value="Sansui">Sansui (1)</option>
            <option value="National">National (1)</option>
          </select>
    </div> 
    <label class="col-sm-2 label-title">Model</label>
    <div class="col-sm-2">
        <select name="feature3" id="">
            <option value="LED">LED (1321)</option>
            <option value="UHD">UHD (910)</option>
            <option value="Other">Other (171)</option>
            <option value="LCD">LCD (72)</option>
            <option value="3D">3D (12)</option>
          </select>
    </div>
   
    
    <label class="col-sm-2 label-title">Screen Size<span class="required">*</span></label>
    <div class="col-sm-2">
    
        <select name="feature1" id="">
            <option value="32 Inches">32 Inches</option>
            <option value="43 Inches">43 Inches</option>
            <option value="55 Inches">55 Inches</option>
            <option value="50 Inches">50 Inches</option>
            <option value="24 Inches">24 Inches</option>
            <option value="65 Inches">65 Inches</option>
            <option value="40 Inches">40 Inches</option>
            <option value="60 Inches">60 Inches</option>
          </select>
    </div>
</div>
<input type="text" hidden name="feature4" value="N/A">
<input type="text" hidden name="feature5" value="N/A">
<input type="text" hidden name="feature6" value="N/A">


<div class="row form-group select-price">
    <label class="col-sm-2 label-title">Decription</span></label>
    <div class="col-sm-10">
       <textarea name="description" class="form-control"  id="description"></textarea>
    </div>
</div>
<div class="row form-group select-price">
    <label class="col-sm-2 label-title">Price</span></label>
    <div class="col-sm-3">
       <input type="number" name="price" class="form-control"  id="description">
    </div>
    <div class="col-sm-2">
       <input type="radio" name="negotiable" value="negotiable" id="negotiable">
        <label for="negotiable">Negotiable </label>
    </div>
</div>
</fieldset>


