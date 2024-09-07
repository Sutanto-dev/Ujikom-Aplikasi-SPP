<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #ebf5fc;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 1200px;
    flex-wrap: wrap;
    padding: 40px 0;
}

.container .card {
    position: relative;
    width: 320px;
    height: 440px;
    box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.05),
                inset 5px 5px 5px rgba(255, 255, 255, 0.5),
                5px 5px 5px rgba(0, 0, 0, 0.05),
                5px 5px 5px rgba(255, 255, 255, 0.5);
    border-radius: 15px;
    margin: 30px;
}

.container .card .box {
    position: absolute;
    top: 20px;
    left: 20px;
    right: 20px;
    bottom: 20px;
    background: #ebf5fc;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container .card:hover .box{
    transform: translateY(-50px);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    /* background: linear-gradient(45deg, #b95ce4, #4f29cd); */
    background: #00b297;
}

.container .card .box .content {
    padding: 20px;
    text-align: center;
}

.container .card .box .content h2 {
    position: absolute;
    top: -10px;
    right: 30px;
    font-size: 8em;
    color: rgba(0, 0, 0, 0.05);
    transition: 0.5s;
}

.container .card .box .content h2 {
    color: rgba(0, 0, 0, 0.05);
}

.container .card .box .content h3 {
    font-size: 1.8em;
    color: #777;
    z-index: 1;
    transition: 0.5s;
}
/* .container .card .box .content img {
    font-size: 1.8em;
    color: #777;
    z-index: 1;
    transition: 0.5s;
} */
.container .card .box .content p{
    font-size: 1em;
    font-weight: 300;
    color: #777;
    z-index: 1;
    transition: 0.5s;
}

.container .card:hover .box .content h3{
    color: #fff;
}

.container .card:hover .box .content p{
    color: #fff;
}

.container .card .box .content a{
    position: relative;
    display: inline-block;
    padding: 8px 20px;
    background: #00b297;
    margin-top: 15px;
    border-radius: 20px;
    color: #fff;
    text-decoration: none;
    font-weight: 400;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.container .card:hover .box .content a {
    background: #1d2939;
}






</style>