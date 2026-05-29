
/* HTMLのidを取得 */
const hour = document.getElementById("hour");
const min = document.getElementById("min");
const sec = document.getElementById("sec");
/* 年越しメッセージ */
const message = document.getElementById("message");

/* カウントダウン処理 */
function countdown() {
  const now = new Date(); // 現在時刻を取得
  const nextYear = new Date(now.getFullYear() + 1, 0, 1); // 来年の1月1日を取得
  const diff = nextYear.getTime() - now.getTime(); // 時間の差を取得（ミリ秒）
  //0以下の場合
  if (diff <= 0) {
    hour.innerHTML = "00";
    min.innerHTML = "00";
    sec.innerHTML ="00";
    message.innerHTML = "⭐Happy New Year 2027⭐";
    return;
  }

  // ミリ秒から単位を修正
  const calcHour = Math.floor(diff / 1000 / 60 / 60);
  const calcMin = Math.floor(diff / 1000 / 60) % 60;
  const calcSec = Math.floor(diff / 1000) % 60;

  // 取得した時間を表示（2桁表示）
  hour.innerHTML = calcHour < 10 ? '0' + calcHour : calcHour;
  min.innerHTML = calcMin < 10 ? '0' + calcMin : calcMin;
  sec.innerHTML = calcSec < 10 ? '0' + calcSec : calcSec;
}
countdown();
setInterval(countdown,1000);