function select_RNAtype(){
  var x = document.getElementById("select_specimen").value;
  // var y = document.getElementById("select_specimen").placeholder;
  // console.log(y);
  switch (x){
    case 'circRNA':
      console.log('circRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">circRNA biomarker</span> by entering a <a href="http://circbase.org/" target="_blank" style="color:#FFFFFF">circBase</a> ID [e.g. hsa_circ_0001649].')
      // $("#select_gene_name").attr("placeholder","KRAS");
      window.document.querySelector('#select_gene_name').value = 'hsa_circ_0000028';
      window.document.querySelector('#select_gene_name').placeholder = 'hsa_circ_0000028';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'lncRNA':
      console.log('lncRNA');
      // console.log('document.getElementById("select_specimen").placeholder');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">lncRNA biomarker</span> by entering a gene symbol [e.g. HOTAIR, BCAR4].')
      // $("#select_gene_name").val("KRAS");
      // y = "KRAS1";
      // console.log('document.getElementById("select_specimen").placeholder');
      window.document.querySelector('#select_gene_name').value = 'ZFAS1';
      window.document.querySelector('#select_gene_name').placeholder = 'ZFAS1';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'miRNA':
      console.log('miRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">miRNA biomarker</span> by entering a <a href="http://www.mirbase.org/" target="_blank" style="color:#FFFFFF">miRBase</a> ID [e.g. hsa-miR-21-5p, hsa-miR-122-5p].')
      console.log(window.document.querySelector('#select_gene_name'));
      window.document.querySelector('#select_gene_name').value = 'hsa-let-7a-5p';
      window.document.querySelector('#select_gene_name').placeholder = 'hsa-let-7a-5p';
      window.document.querySelector('#miRBase_logo_div').style.display = 'block';
      break;
    case 'mRNA':
      console.log('mRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">mRNA biomarker</span> by entering a gene symbol [e.g. KLF9,KRT19].')
      window.document.querySelector('#select_gene_name').value = 'KRAS';
      window.document.querySelector('#select_gene_name').placeholder = 'KRAS';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'piRNA':
      console.log('piRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">piRNA biomarker</span> by entering a <a href="http://pirnabank.ibab.ac.in/" target="_blank" style="color:#FFFFFF">piRNABank</a> ID [e.g. hsa_piR_017723, hsa_piR_001311].')
      window.document.querySelector('#select_gene_name').value = 'hsa_piR_000172';
      window.document.querySelector('#select_gene_name').placeholder = 'hsa_piR_000172';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'pseudo':
      console.log('pseudo');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">pseudo biomarker</span> by entering a gene symbol [e.g. INTS6P1, LDC1P].')
      window.document.querySelector('#select_gene_name').value = 'INTS6P1';
      window.document.querySelector('#select_gene_name').placeholder = 'INTS6P1';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'RNA fusion':
      console.log('RNA fusion');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">RNA fusion biomarker</span> by entering a gene symbol [e.g. GOLM1, NAA35].')
      window.document.querySelector('#select_gene_name').value = 'KRAS';
      window.document.querySelector('#select_gene_name').placeholder = 'KRAS';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'snoRNA':
      console.log('snoRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">snoRNA biomarker</span> by entering a gene symbol [e.g. SNORD33, SNORD66].')
      window.document.querySelector('#select_gene_name').value = 'SNORD33';
      window.document.querySelector('#select_gene_name').placeholder = 'SNORD33';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'snRNA':
      console.log('snRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">snRNA biomarker</span> by entering a gene symbol [e.g. RNU2-1, RNU6-1].')
      window.document.querySelector('#select_gene_name').value = 'RN7SK';
      window.document.querySelector('#select_gene_name').placeholder = 'RN7SK';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
    case 'srpRNA':
      console.log('srpRNA');
      $("#change_by_RNAtype").html('Search a <span style = "text-decoration:underline;font-style:italic;">srpRNA biomarker</span> by entering a gene symbol [e.g. RN7SL1].')
      window.document.querySelector('#select_gene_name').value = 'RN7SL1';
      window.document.querySelector('#select_gene_name').placeholder = 'RN7SL1';
      window.document.querySelector('#miRBase_logo_div').style.display = 'none';
      break;
  }
}//end function

select_RNAtype();