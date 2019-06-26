<div class='container'>
	<h3>Options de Serveur</h3>
	
		<h4>Disques Durs</h4>
		
			<h5>Disque 1</h5>
			<p>Cela vous permettra de définir l'emplacement du lecteur à surveiller par le module HDD1. Les points de montage détectés sont répertoriés ci-dessous.</p>
	        <select name="hdd1_path" id="hdd1_path">
                <?php 
                    $display = $config["hdd1"]["path"];
                    echo "<option value='$display'>$display</option>";
                    foreach ($dfarray as $k => $v ) {
                    	if($v == $display) {
                    	    continue;
                    	}
						echo "<option value='$v'>$v</option>";
					}
				?>
	        </select>
	        <br>
	        <br>
            
            <h5>Disque 2</h5>
			<p>Cela vous permettra de définir l'emplacement du lecteur à surveiller par le module HDD2. Les points de montage détectés sont répertoriés ci-dessous.</p>
	        <select name="hdd2_path" id="hdd2_path">
                <?php 
                    $display = $config["hdd2"]["path"];
                    echo "<option value='$display'>$display</option>";
                    foreach ($dfarray as $k => $v ) {
                    	if($v == $display) {
                    	    continue;
                    	}
						echo "<option value='$v'>$v</option>";
					}
				?>
	        </select>
	        <br>
	        <br>
            
            <h5>Disque 3</h5>
			<p>Cela vous permettra de définir l'emplacement du lecteur à surveiller par le module HDD3. Les points de montage détectés sont répertoriés ci-dessous.</p>
            <select name="hdd3_path" id="hdd3_path">
                <?php 
                    $display = $config["hdd3"]["path"];
                    echo "<option value='$display'>$display</option>";
                    foreach ($dfarray as $k => $v ) {
                    	if($v == $display) {
                    	    continue;
                    	}
						echo "<option value='$v'>$v</option>";
					}
				?>
            </select>
            <br>
            <br>
            <br>

		<h4>Network</h4>
		
			<h5>Interface</h5>
			<p>Cela vous permettra de sélectionner l'interface réseau à surveiller. Les interfaces détectées sont énumérées ci-dessous.</p>
            <select name="network_interface" id="network_interface">
                <?php 
                    $display = $config["network"]["interface"];
                    echo "<option value='$display'>$display</option>";
                    foreach ($lsarray as $k => $v ) {
                    	if($v == $display) {
                    	    continue;
                    	}
						echo "<option value='$v'>$v</option>";
					}
				?>
            </select>
        <div>
        	<button type="submit" value="submit" class="submit" name="submit">Envoyer</button>
        </div>
</div>