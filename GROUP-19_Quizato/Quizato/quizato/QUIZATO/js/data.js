let html;
let count = 0;
let result;

let userAns = [];
(async function fatchMydata() {
    try {
        //!calling fetch api
        let res = await fetch("http://localhost:3000/JAVASCRIPT").then(
            (Response) => {
                // 
                return Response;
            }
        );
        //!check resonse is "ok" then execute the if block
        if (res.status == 200) {
            let element = document.getElementById("ques");
            result = res.json();
            result.then((data) => {
                for (let i = 0; i < data.length; i++) {
                    count++;
                    html = ` <div class="container-fluid bg-info">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span class="label label-warning" id="qid">${i + 1
                        }</span> ${data[i].ques}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-3 col-xs-offset-5">
                                <div id="loadbar" style="display: none;">
                                    <div class="blockG" id="rotateG_01"></div>
                                    <div class="blockG" id="rotateG_02"></div>
                                    <div class="blockG" id="rotateG_03"></div>
                                    <div class="blockG" id="rotateG_04"></div>
                                    <div class="blockG" id="rotateG_05"></div>
                                    <div class="blockG" id="rotateG_06"></div>
                                    <div class="blockG" id="rotateG_07"></div>
                                    <div class="blockG" id="rotateG_08"></div>
                                </div>
                            </div>
                            <div class="quiz" id="quiz-${i}" data-toggle="buttons">
                            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer_${i}" value="${data[i].opt1
                        }"  id="ans-${i + 1}-1">1 ${data[i].opt1}</label>
                            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer_${i}" value="${data[i].opt2
                        }"  id="ans-${i + 1}-2">2 ${data[i].opt2}</label>
                            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer_${i}" value="${data[i].opt3
                        }"  id="ans-${i + 1}-3">3 ${data[i].opt3}</label>
                            <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer_${i}" value="${data[i].opt4
                        }"  id="ans-${i + 1}-4">4 ${data[i].opt4}</label>
                        </div4
                    </div4
                    <div 4lass="modal-footer text-muted">
                        <span id="answer"></span>
                    </div>
                    </div>
                    </div>
                    </div>`;
                    // html += html;
                    element.innerHTML += html;
                    // 
                }
            });
        } else {
            document.write('res.status');
        }
    } catch (error) {
        document.write(error);
    }
})();
let submit = document.getElementById("submit");
submit.onclick = () => checkAns();
async function checkAns() {
    let data;
    
    userAns=[]
    
    await result.then((data) => {
        this.data = data.length;
    });
    // 
    for (let index = 0; index < this.data; index++) {
        // 
        let str = `q_answer_${index}`;
        // demo=document.querySelectorAll('type=radio');
        // 
        let element = document.getElementsByName(str);
        for (let j = 1; j <= element.length; j++) {
            let id = `ans-${index + 1}-${j}`;
            let radioBtn = document.getElementById(id);
            //  
            storeAns(radioBtn,index)
        } 
    }
    showCorrectAns(this.data);
}
function storeAns(radioBtn,questionNum)
{
    if (radioBtn.checked==true) {
        userAns.splice(questionNum,0,radioBtn.value);
    }
}
async function showCorrectAns(data){
    let divAns=document.getElementById('ans');
    let childHtml="";
    let c=1;
    console.log(result[0]);
    await result.then(info=>{
        info.forEach((element,index) => {
            console.log(element);
            html=`<p>
            <strong>Question ${c}:</strong> Your answer is the <strong>${userAns[index]}</strong>.
            <br>
            </strong>    The correct answer is the <strong>Answer ${element.ans}</strong>.
            </p>`;
            childHtml+=html;
            c++;
        });
    })
    // console.log(ans);
    divAns.innerHTML=childHtml;
    divAns.style.display='block';
}
