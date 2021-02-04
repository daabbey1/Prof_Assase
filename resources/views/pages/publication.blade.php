@extends('layouts.pages')
@section('title','Prof Assase | Publications')
@section('body')

<div>
	<div class="row">
            <!--carousel from another file -->
            <div class="row">
                <div class="col-md-8">
                  <div class="carousel-layout">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                  <!-- Slide One - Set the background image for this slide in the line below -->
                                  <div class="carousel-item active">
                                    <img src="{{url('/').'/images/11academics.jpg'}}" style="opacity: 0.9" width="100%" height="100%">
                                    <div class="carousel-caption d-none d-md-block">
                                     <!--  <h4 > <span class="head-desc">SDG4UNiS</span></h4>
                                      <p class="caro-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p> -->
                                    </div>
                                  </div>
                                  <!-- Slide Two - Set the background image for this slide in the line below -->
                             
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span> -->
                                    </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" style="margin-right: -10% !important" data-slide="next">
                                      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span> -->
                                    </a>
                              </div>    
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="row" style="margin-top: 0">
                    <div class="col-md-12">
                      <img src="{{url('/').'/images/1books.jpg'}}" width="100%" height="70%">
                      <span class="" style="color: black">Books</span>
                    </div>
                    
                  </div>
                  <div class="row" style="margin-top:-10%">
                    <div class="col-md-12">
                       <img src="{{url('/').'/images/books.jpg'}}" width="100%" height="70%">
                      <span class="" style="color: black">journal Articles</span>
                      <!-- <img src="{{url('/').'/images/st.jpg'}}" width="100%" height="100%"> -->
                    </div>
                  </div>
                  <div class="row" style="margin-top:-10%">
                    <div class="col-md-12">
                       <img src="{{url('/').'/images/books.jpg'}}" width="100%" height="70%">
                      <span class="" style="color: black">Conference Paper</span>	
                      <!-- <img src="{{url('/').'/images/st.jpg'}}" width="100%" height="100%"> -->
                    </div>
                  </div>
                </div>

  
  
            </div>
            
          </div>

     <div class="parent-pub-title">
     		<p class="pub-title">BOOKS</p>
     	</div>
     <div class="row">
     	
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">1.</span>
     			<div style="padding:20px;">
     				<h5>HABITAT: Vernacular Architecture for Changing Planet (2018)</h5>
     				<p style="color: grey">Oppong, Rexford. Asassie. & Amos-Abanyie, S. (2018)</p>
     				<p>Vernacular Settlements of Cote d’Ivoire, Ghana, Togo Benin and Cameron
     				Sandra Piesik (ed.) Thames & Hudson, pp. 12-13, 96-99, 575-576, 582-583.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">2.</span>
     			<div style="padding:20px;">
     				<h5>African Histories and Modernities -Shadows of Empire: Studies of European Fortifications in West Africa,</h5>
     				<!-- author -->
     				<p style="color: grey">Henry Nii Adziri Wellington & Rexford Assasie Oppong (2017)</p>
     				<p>European Fortifications in West Africa as Architectural Containers and Oppressive Contraptions.
     				John Osei Tutu and Victoria Smith (eds.) (Switzerland: Springer International Publishing AG, Cham A Palgrave Macmillan Edited Collection, pp. 239-272. </p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">3.</span>
     			<div style="padding:20px;">
     				<h5>Equal Opportunity for All</h5>
     				<p style="color: grey">Rexford Assasie Oppong (2017): </p>
     				<p>The World Bank Group, Washington DC, U.S.A.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">4.</span>
     			<div style="padding:20px;">
     				<h5>NK) SO) HOUSE </h5>
     				<p style="color: grey">Rexford Assasie Oppong (2016)</p>
     				<p>Mud House Building Workshop in Ghana” Documentation”, Mark Kaltenbach (ed.) Raumgeschichten e. V. </p>
     			</div>
     		</div>
     	</div>
     </div>


     <!-- row2 -->
     <div class="row" style="margin-top: 50px">
     	
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">5.</span>
     			<div style="padding:20px;">
     				<h5>Doing Business 2016</h5>
     				<p style="color: grey">Rexford Assasie Oppong (2016)</p>
     				<p>Doing Business 2016: Measuring Regulatory Quality and Efficiency, The World Bank Group, Washington DC, U.S.A</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">6.</span>
     			<div style="padding:20px;">
     				<h5>Doing Business 2014: Going Beyond Efficiency,</h5>
     				<!-- author -->
     				<p style="color: grey">Rexford Oppong (2015)</p>
     				<p>Going Beyond Efficiency, The World Bank Group, Washington DC, U.S.A </p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">7.</span>
     			<div style="padding:20px;">
     				<h5>Understanding Regulations for Small and Medium-Size Enterprises</h5>
     				<p style="color: grey">Rexford Oppong (2014) </p>
     				<p>Doing Business 2014: Understanding Regulations for Small and Medium-Size Enterprises, The World Bank Group, Washington DC, U.S.A.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">8.</span>
     			<div style="padding:20px;">
     				<h5>“Volta Region” in: Human Settlements and Service Delivery in Ghana</h5>
     				<p style="color: grey">Adarkwa, K. K. & Oppong, R. A. (2013)</p>
     				<p>Kwasi Kwafo Adarkwa (ed), University Printing Press, Kumasi.  pp.194-213. </p>
     			</div>
     		</div>
     	</div>
     </div>


     <!-- row3 -->
      <div class="row" style="margin-top: 50px">
     	
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">9.</span>
     			<div style="padding:20px;">
     				<h5>Smarter Regulations for Small and Medium-Size Enterprises</h5>
     				<p style="color: grey">	Rexford Oppong (2013)</p>
     				<p>Doing Business 2013: Smarter Regulations for Small and Medium-Size Enterprises, The World Bank Group, Washington DC, U.S.A </p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">10.</span>
     			<div style="padding:20px;">
     				<h5>Doing Business 2014: Going Beyond Efficiency,</h5>
     				<!-- author -->
     				<p style="color: grey">Rexford Oppong (2012)</p>
     				<p>Doing Business 2012: Doing Business in a more Transparent world, The World Bank Group, Washington DC, U.S.A.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-md-3">
     		<div class="books-outline">
     			<span class="num">11.</span>
     			<div style="padding:20px;">
     				<h5>Survey of World Cultures</h5>
     				<p style="color: grey">Oppong, R. A. (2006) </p>
     				<p>, Course book for Institute of Distance Learning, Kwame Nkrumah University of Science and Technology, Kumasi. </p>
     			</div>
     		</div>
     	</div>
     	
     </div>








     <!--- journal articles -->
          <div class="parent-jour-title" style="margin-top: 50px">
            <p class="jour-title">JOURNAL ARTICLES</p>
        </div>
     <div class="row">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">1.</span>
                <div style="padding:20px;">
                    <h5>The Volta River Project: Planning, housing and resettlement in Ghana 1950-1965</h5>
                    <p style="color: grey">Iain Jackson, Ola Uduku, Irene Appeaning Addo, Rexford Assasie Oppong</p>
                    <p>The Journal of Architecture. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">2.</span>
                <div style="padding:20px;">
                    <h5>Conservation and Character Defining Elements of Historical Towns</h5>
                    <!-- author -->
                    <p style="color: grey">R. A. Oppong, A. B. Marful, and Y. K. Sarbeng (2018)</p>
                    <p>A Comparative Study of Cape Coast and Elmina Streets to the Castles”, Frontiers of Architectural Research, Volume 7, Issue 1, pp.37-55. <a href="https://doi.org/10.1016/j.foar.2017.11.001"> https://doi.org/10.1016/j.foar.2017.11.001</a> </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">3.</span>
                <div style="padding:20px;">
                    <h5>Dilemma of Sustainable Roof Forms in Warm-Humid Climatic Zones</h5>
                    <p style="color: grey">Twumasi - Ampofo K. and Oppong, R.A. (2018) </p>
                    <p>: A Survey of Parapet Roofs in Kumasi, Ghana”, African Journal of Applied Research Vol. 4, No. 2 pp. 203-215 <a href="http://www.ajaronline.com http://doi.org/10.26437/ajar.04.02.2018.18">http://www.ajaronline.com http://doi.org/10.26437/ajar.04.02.2018.18</a> </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">4.</span>
                <div style="padding:20px;">
                    <h5>Exploring eco-aesthetics for urban green infrastructure development and building resilient cities </h5>
                    <p style="color: grey">Ayisha Ida Haruna, Rexford Assasie Oppong, Alexander Boakye Marful (2018)</p>
                    <p>a theoretical overview”, Cogent Social Sciences, Volume 4, Issue 1, pp. 1-18, <a href="https://doi.org/10.1080/23311886.2018.1478492">https://doi.org/10.1080/23311886.2018.1478492</a>  </p>
                </div>
            </div>
        </div>
     </div>


     <!-- row2 -->
     <div class="row" style="margin-top: 50px">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">5.</span>
                <div style="padding:20px;">
                    <h5>Improving urban visibility through fractal analysis of street edges</h5>
                    <p style="color: grey">R. A. Oppong, A. B. Marful, and E. S. Asare (2017)</p>
                    <p>The case of John Evans Atta Mills High Street in Accra, Ghana”, Frontiers of Architectural Research, Vol. 6, Issue 2, June 2017, Pages 248-260 <a href="https://doi.org/10.1016/j.foar.2017.04.002"> https://doi.org/10.1016/j.foar.2017.04.002 </a> </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">6.</span>
                <div style="padding:20px;">
                    <h5>Exploring the concept of mixed media in Ghana</h5>
                    <!-- author -->
                    <p style="color: grey">Adjei, K., Asante, E. A. and Oppong, R. A. (2017)</p>
                    <p>Craft Research, Volume 8 Number 2 (CRRE 8 (2), pp. 241–256, Intellect Limited 2017.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">7.</span>
                <div style="padding:20px;">
                    <h5>Alternative Wall Material (AWM): Comparing PET Bottle Bricks with Cement Blocks and Compressed Earth Blocks for Housing in Ghana</h5>
                    <p style="color: grey">Twumasi-Ampofo K. and Oppong, R. A. (2017).  </p>
                    <p>Journal of Emerging Trends in Engineering and Applied Sciences (JETEAS), 8(3):123-130. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">8.</span>
                <div style="padding:20px;">
                    <h5>A Quantitative assessment of relationship between Urban Green Parks and Self-esteem of Urban Children and Adolescents (Teenage Group) in Ghana</h5>
                    <p style="color: grey">Quagraine V. K., Oppong, R. A. and Baawone, F. (2016). </p>
                    <p>Journal of Civil and Environmental Research, Vol.8, No.3, pp. 64-72. ISSN 2224-5790 (Paper) ISSN 2225-0514 (Online).</p>
                </div>
            </div>
        </div>
     </div>


     <!-- row3 -->
      <div class="row" style="margin-top: 50px">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">9.</span>
                <div style="padding:20px;">
                    <h5>Assessment of the Resettlement Compensation Satisfaction of Wood Workers at Sokoban, Kumas</h5>
                    <p style="color: grey">Quagraine, V. K., Oppong, R. A. and Twumasi-Ampofo, K. (2016). </p>
                    <p>Journal of Science and Technology, Vol. 36, No. 3 (2016), pp 86-95. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">10.</span>
                <div style="padding:20px;">
                    <h5>Shopping Mall as a Catalyst for Sub-Urban Development in Ghana</h5>
                    <!-- author -->
                    <p style="color: grey">Quagraine V. K., Oppong, R. A. and Agyekum-Sah. J. (2016). </p>
                    <p>”, Journal of Science and Technology, Vol. 36, No. 3 (2016), pp 83-99. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num-journal">11.</span>
                <div style="padding:20px;">
                    <h5>Building Materials and their Energy Demand: A Case in Ghana</h5>
                    <p style="color: grey">Gyimah, K. A., and Oppong, R. A. (2016). </p>
                    <p>African Journal of Applied Research (AJAR), Vol.2, No.2, pp. 35-46, ISSN 2408-7920.</p>
                </div>
            </div>
        </div>


        
     </div>



      <!--- conference paper  -->
          <div class="parent-pub-title" style="margin-top: 50px">
            <p class="pub-title">CONFERENCE PAPER</p>
        </div>
     <div class="row">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">1.</span>
                <div style="padding:20px;">
                    <h5>Role of Sustainable Development Goals for Universities (SDG4UNiS) in the Internationalization Strategy of Universities</h5>
                    <p style="color: grey"> Oppong, R. A. (2018).</p>
                    <p>During SDG4UNiS Winter School Conference 2018, organized by CLEAN-AFRICA e.V </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">2.</span>
                <div style="padding:20px;">
                    <h5>Retracing Resilience: The Potential of Using Fractal Analysis to enhance Resilience of Keta and Prampram Waterfront in Ghana</h5>
                    <!-- author -->
                    <p style="color: grey">Marful, A. B., Ayeke, E. and Oppong, R. A. (2018).</p>
                    <p>(54th ISOCARP Congress 2018, Norway).  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">3.</span>
                <div style="padding:20px;">
                    <h5>Strategies for making Peri-urban coastal communities resilient in Sub-saharan Africa: The Case of Ningo-Prampram</h5>
                    <p style="color: grey"> Marful, A. B., Ayeke, E. and Oppong, R. A. (2018) </p>
                    <p>(54th ISOCARP Congress 2018, Norway).</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">4.</span>
                <div style="padding:20px;">
                    <h5>An Exploratory Assessment of Landscape Ecological Aesthetics of Selected Green Spaces on KNUST Campus, Kumasi-Ghana </h5>
                    <p style="color: grey"> Haruna, A. I., Oppong, R. A. and Marful, A. B. (2017)</p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on 12th -14th April 2017, at KNUST, Kumasi, Ghana.  </p>
                </div>
            </div>
        </div>
     </div>


     <!-- row2 -->
     <div class="row" style="margin-top: 50px">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">5.</span>
                <div style="padding:20px;">
                    <h5>Analysis of Ornamentations in Modernist and Postmodernist Building Infrastructure: A Case Study of Kwame Nkrumah University of Science and Technology (KNUST)</h5>
                    <p style="color: grey">Adjei, K. and Oppong, R. A. (2017).</p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA) 2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana.  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">6.</span>
                <div style="padding:20px;">
                    <h5>Practical Approaches to Building Resilience in Africa’s Urban Infrastructure Development: A Focus on in Accra- Ghana</h5>
                    <!-- author -->
                    <p style="color: grey">Jemimah Asamoah, R. Assasie Oppong and Jacob Yaw Afrim (2017).</p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">7.</span>
                <div style="padding:20px;">
                    <h5>Assessing The Adequacy of Fire Safety Measures in Student Housing: The Case Study of Halls of Residence and Privately-Owned Student Hostels at KNUST, Kumasi</h5>
                    <p style="color: grey">E.O. Asigri1, S.O. Afram, & R. A. Oppong, (2017).  </p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">8.</span>
                <div style="padding:20px;">
                    <h5>AChallenges to Resilient Infrastructure Delivery in Wetland Areas: The Case of Kumasi</h5>
                    <p style="color: grey"> A. S. Boateng, R. A. Oppong and T. E. Kwofie (2017) </p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana.</p>
                </div>
            </div>
        </div>
     </div>


     <!-- row3 -->
      <div class="row" style="margin-top: 50px">
        
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">9.</span>
                <div style="padding:20px;">
                    <h5>Building Safer Cities: Assessing Green Infrastructure for Storm Water Management at Kwame Nkrumah Interchange, Accra</h5>
                    <p style="color: grey">H. S. Abdul-Hamid, R. A. Oppong and K. A. Gyimah (2017)</p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">10.</span>
                <div style="padding:20px;">
                    <h5>The Challenges of Highway Crossing: The Case of Santasi, Kumasi.</h5>
                    <!-- author -->
                    <p style="color: grey"> E. Owusu Banahene, R. A. Oppong, and V. K. Quagraine (2017) </p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on   12th -14th April 2017, at KNUST, Kumasi, Ghana.  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="books-outline">
                <span class="num">11.</span>
                <div style="padding:20px;">
                    <h5>Our Environment hanging Higgledy-Piggledy”: A Catalogue of Manifestations in Ghana.</h5>
                    <p style="color: grey">Tagoe, M., Oppong, R. A. and Laing, O. N. (2017) </p>
                    <p>A Paper delivered at the 6th International Conference on Infrastructure Development in Africa (ICIDA)2017 held on 12th -14th April 2017, at KNUST, Kumasi, Ghana. </p>
                </div>
            </div>
        </div>



</div>


<!-- 



     <div class="row">
        <div class="col-md-12">
          <nav arial-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tableindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
          </nav>
        </div>
    </div> -->

</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			if($(this).scrollTop() > 110){
				$(".books-outline").css({"opacity" : "1"});
				$(".parent-pub-title").css({"opacity" : "1"});
				$(".parent-pub-title").css({"transition" : "0.9s"});
				$(".books-outline").css({"transition" : "1.9s"});

			}
			else{
				$(".books-outline").css({"opacity" : "0"});
				$(".books-outline").css({"transition" : "0.9s"});
				$(".parent-pub-title").css({"opacity" : "0"});
				$(".parent-pub-title").css({"transition" : "0.9s"})
			}
		})
	})
</script>

@endsection