<!-- about section start  -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/user.jpg" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>To pursue a professional career, where my skills and creativity can be utilized in maximizing company profits While providing career advancement opportunities.</p>
            
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>

                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Front-End</span><br>Developer Web/App interfaces</li>
                        <li><span>Back-End</span><br>Developer Web/App interfaces</li>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                    </ul>
                </div>

                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2022</span><br>UX/UI Design </li>
                        <li><span>2023-Current</span><br>Web Development Training at Dominant-Infotech</li>
                    </ul>
                </div>

                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2017</span><br>10th Pass with 70%</li>
                        <li><span>2019</span><br>12th Pass with 60%</li>
                        <li><span>2019-2023</span><br>B.E in GEC,Surat</li>
                        <li><span>2023</span><br>Web Development Training at Dominant Infotech</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section end  -->


<!-- -----about me js section start-------->
<script>
    
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>
<!-- -----about me js section end-------->