						
						var lineElem,x,y,posX,posY,startX,startY,startLine
						var ln,x_curr,x_prev
						var x = []
						var y = []
						var incX = 37.5
						var incY = 37.5
						var rMax = 3;
						var cMax = 3;
						var pass = ''
						var p=new Array(4)
						dragging=false
						first=true
						for (r=0; r <=3; r++) {
							p[r]=new Array(4)
						}
/*
						var bar=new Array(16)
						for (r=1; r <=16; r++) {
							bar[r]=new Array(16)
						}
						var n=new Array(1,4,5);
						for (m=0;m<=2;m++) {
							m=m*4;
							for (i=m+1;i<=m+4;i++) {
								for (k=1;k<=3;k++) {
									bar[i][i + n[k-1]] = document.createElement("div")
									bar[i][i + n[k-1]] . className = 'bar'
									bar[i][i + n[k-1]] . style.cssText = "transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
									if (i==4) return true;
								}
							}
						}
*/						
						bar[1][2] = document.createElement("div")
						bar[1][5] = document.createElement("div")
						bar[1][6] = document.createElement("div")
						bar[2][3] = document.createElement("div")
						bar[2][6] = document.createElement("div")
						bar[2][7] = document.createElement("div")
						bar[3][4] = document.createElement("div")
						bar[3][7] = document.createElement("div")
						bar[3][8] = document.createElement("div")
						bar[4][8] = document.createElement("div")

						bar[1][2].className='bar'
						bar[1][5].className='bar'
						bar[1][6].className='bar'
						bar[2][3].className='bar'
						bar[2][6].className='bar'
						bar[2][7].className='bar'
						bar[3][4].className='bar'
						bar[3][7].className='bar'
						bar[3][8].className='bar'
						bar[4][8].className='bar'

						bar[1][2].style.cssText="top:55px;left:55px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[1][5].style.cssText="top:55px;left:45px;height:100px;width:10px"
						bar[1][6].style.cssText="top:55px;left:50px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[2][3].style.cssText="top:55px;left:155px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[2][6].style.cssText="top:55px;left:145px;height:100px;width:10px"
						bar[2][7].style.cssText="top:55px;left:150px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[3][4].style.cssText="top:55px;left:255px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[3][7].style.cssText="top:55px;left:245px;height:100px;width:10px"
						bar[3][8].style.cssText="top:55px;left:250px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[4][8].style.cssText="top:55px;left:345px;height:100px;width:10px"

						bar[5][6] = document.createElement("div")
						bar[5][9] = document.createElement("div")
						bar[5][10] = document.createElement("div")
						bar[6][7] = document.createElement("div")
						bar[6][10] = document.createElement("div")
						bar[6][11] = document.createElement("div")
						bar[7][8] = document.createElement("div")
						bar[7][11] = document.createElement("div")
						bar[7][12] = document.createElement("div")
						bar[8][12] = document.createElement("div")

						bar[5][6].className='bar'
						bar[5][9].className='bar'
						bar[5][10].className='bar'
						bar[6][7].className='bar'
						bar[6][10].className='bar'
						bar[6][11].className='bar'
						bar[7][8].className='bar'
						bar[7][11].className='bar'
						bar[7][12].className='bar'
						bar[8][12].className='bar'

						bar[5][6].style.cssText="top:155px;left:55px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[5][9].style.cssText="top:155px;left:45px;height:100px;width:10px"
						bar[5][10].style.cssText="top:155px;left:50px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[6][7].style.cssText="top:155px;left:155px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[6][10].style.cssText="top:155px;left:145px;height:100px;width:10px"
						bar[6][11].style.cssText="top:155px;left:150px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[7][8].style.cssText="top:155px;left:255px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[7][11].style.cssText="top:155px;left:245px;height:100px;width:10px"
						bar[7][12].style.cssText="top:155px;left:250px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[8][12].style.cssText="top:155px;left:345px;height:100px;width:10px"

						bar[9][10] = document.createElement("div")
						bar[9][13] = document.createElement("div")
						bar[9][14] = document.createElement("div")
						bar[10][11] = document.createElement("div")
						bar[10][14] = document.createElement("div")
						bar[10][15] = document.createElement("div")
						bar[11][12] = document.createElement("div")
						bar[11][15] = document.createElement("div")
						bar[11][16] = document.createElement("div")
						bar[12][16] = document.createElement("div")

						bar[9][10].className='bar'
						bar[9][13].className='bar'
						bar[9][14].className='bar'
						bar[10][11].className='bar'
						bar[10][14].className='bar'
						bar[10][15].className='bar'
						bar[11][12].className='bar'
						bar[11][15].className='bar'
						bar[11][16].className='bar'
						bar[12][16].className='bar'

						bar[9][10].style.cssText="top:255px;left:55px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[9][13].style.cssText="top:255px;left:45px;height:100px;width:10px"
						bar[9][14].style.cssText="top:255px;left:50px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[10][11].style.cssText="top:255px;left:155px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[10][14].style.cssText="top:255px;left:145px;height:100px;width:10px"
						bar[10][15].style.cssText="top:255px;left:150px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[11][12].style.cssText="top:255px;left:255px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[11][15].style.cssText="top:255px;left:245px;height:100px;width:10px"
						bar[11][16].style.cssText="top:255px;left:250px;height:137.5px;width:10px;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-webkit-transform:rotate(-45deg)"
						bar[12][16].style.cssText="top:255px;left:345px;height:100px;width:10px"

						bar[13][14] = document.createElement("div")
						bar[14][15] = document.createElement("div")
						bar[15][16] = document.createElement("div")
						bar[16][15] = document.createElement("div")

						bar[13][14].className='bar'
						bar[14][15].className='bar'
						bar[15][16].className='bar'
						bar[16][15].className='bar'

						bar[13][14].style.cssText="top:355px;left:55px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[14][15].style.cssText="top:355px;left:145px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[15][16].style.cssText="top:355px;left:250px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"
						bar[16][15].style.cssText="top:355px;left:250px;height:100px;width:10px;transform:rotate(-90deg);-ms-transform:rotate(-90deg);-webkit-transform:rotate(-90deg)"

						bar[5][2] = document.createElement("div")
						bar[6][3] = document.createElement("div")
						bar[7][4] = document.createElement("div")

						bar[9][6] = document.createElement("div")
						bar[10][7] = document.createElement("div")
						bar[11][8] = document.createElement("div")

						bar[13][10] = document.createElement("div")
						bar[14][11] = document.createElement("div")
						bar[15][12] = document.createElement("div")

						bar[5][2].className='bar'
						bar[6][3].className='bar'
						bar[7][4].className='bar'

						bar[9][6].className='bar'
						bar[10][7].className='bar'
						bar[11][8].className='bar'

						bar[13][10].className='bar'
						bar[14][11].className='bar'
						bar[15][12].className='bar'

						bar[5][2].style.cssText="top:155px;left:55px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[6][3].style.cssText="top:155px;left:155px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[7][4].style.cssText="top:155px;left:255px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"

						bar[9][6].style.cssText="top:255px;left:55px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[10][7].style.cssText="top:255px;left:155px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[11][8].style.cssText="top:255px;left:255px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"

						bar[13][10].style.cssText="top:355px;left:55px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[14][11].style.cssText="top:355px;left:155px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						bar[15][12].style.cssText="top:355px;left:255px;height:137.5px;width:10px;transform:rotate(-135deg);-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg)"
						/*

						    -   3,4,5
							+/- 1
							+   3,4,5
							
							p + (-5,-4,-3,-1,1,3,4,5) fall between (1 to 16)
						
						*/
						var rules = new Array(16)
						for (r=1; r <=16; r++) {
							rules[r]=new Array(8)
						}
						
						rules[1]=Array(2,5,6)
						rules[2]=Array(1,3,5,6,7)
						rules[3]=Array(2,4,6,7,8)
						rules[4]=Array(3,8,7)
						rules[5]=Array(1,9,6,10,3)
						rules[6]=Array(5,7,9,10,11,1,2,3)
						rules[7]=Array(6,8,10,11,12,2,3,4)
						rules[8]=Array(4,12,7,3,11)
						rules[9]=Array(4,12,5,13,10)
						rules[10]=Array(9,11,5,13,4,6,12,14)
						rules[11]=Array(10,11,6,155,8,14,16)
						rules[12]=Array(8,16,11,7,15)
						rules[13]=Array(9,14,10)
						rules[14]=Array(13,15,10,9,11)
						rules[15]=Array(14,15,11,10,12)
						rules[16]=Array(15,12,11)
						var iM, iC, iC2
						var firstlinedone=false, x_start=''
						function pattern() {
							var html = document.documentElement;
							iM = document.createElement('div');
							iC2 = document.createElement('div');
							iC = document.createElement('div');
							var div=[]
							iM.style.cssText = "display:block;position:fixed;width:100%;height:100%;top:0px;bottom:0px;left:0px;right:0px;margin:auto;z-index:9999;background:#000;opacity:0.9"
							iC.style.cssText = "display:block;position:absolute;width:400px;height:400px;top:0px;bottom:0px;left:0px;right:0px;margin:auto;z-index:9999;background:url(assets/images/mb2.png) center center;opacity:0.9;box-shadow:inset 2px 2px 10px #000;"
							iC2.style.cssText = "display:none;position:absolute;width:400px;height:400px;top:0px;bottom:0px;left:0px;right:0px;margin:auto;z-index:99999;background:#333;opacity:0.5"
							iM.id="iM"
							iC.id="iC"
							html.appendChild(iM)
							html.appendChild(iC)
							html.appendChild(iC2)
							iC.appendChild(bar[1][2])
							iC.appendChild(bar[1][5])
							iC.appendChild(bar[1][6])
							iC.appendChild(bar[2][3])
							iC.appendChild(bar[2][6])
							iC.appendChild(bar[2][7])
							iC.appendChild(bar[3][4])
							iC.appendChild(bar[3][7])
							iC.appendChild(bar[3][8])
							iC.appendChild(bar[4][8])
							
							iC.appendChild(bar[5][6])
							iC.appendChild(bar[5][9])
							iC.appendChild(bar[5][10])
							iC.appendChild(bar[6][7])
							iC.appendChild(bar[6][10])
							iC.appendChild(bar[6][11])
							iC.appendChild(bar[7][8])
							iC.appendChild(bar[7][11])
							iC.appendChild(bar[7][12])
							iC.appendChild(bar[8][12])
							
							iC.appendChild(bar[9][10])
							iC.appendChild(bar[9][13])
							iC.appendChild(bar[9][14])
							iC.appendChild(bar[10][11])
							iC.appendChild(bar[10][14])
							iC.appendChild(bar[10][15])
							iC.appendChild(bar[11][12])
							iC.appendChild(bar[11][15])
							iC.appendChild(bar[11][16])
							iC.appendChild(bar[12][16])
							
							iC.appendChild(bar[13][14])
							iC.appendChild(bar[14][15])
							iC.appendChild(bar[15][16])
							
							iC.appendChild(bar[5][2])
							iC.appendChild(bar[6][3])
							iC.appendChild(bar[7][4])
							
							iC.appendChild(bar[9][6])
							iC.appendChild(bar[10][7])
							iC.appendChild(bar[11][8])
							
							iC.appendChild(bar[13][10])
							iC.appendChild(bar[14][11])
							iC.appendChild(bar[15][12])
							iC.appendChild(bar[16][15])
							
							iC.addEventListener("mousemove", function(e){
								if(startLine){
									x = e.pageX;
									y = e.pageY;
									setTimeout('createLine('+startX+','+startY+','+x+','+y+')',10)
								}
							})
							for (var r=1;r<=4;r++) {
								for (var c=1;c<=4;c++) {
									div[r,c] = document.createElement("div");
									iC.appendChild(div[r,c])
									div[r,c].id=(r-1)*4+c
									div[r,c].style.cssText="margin-left:37.5px;margin-top:37.5px;width:25px;height:25px;border-radius:50px;background:#fff;position:absolute;left:"+(c-1)*100 + "px;top:"+(r-1)*100+"px;box-shadow:inset 1px 0px 5px #000;z-index:999999"
									
									div[r,c].addEventListener("mousedown", function(e){
										e.target.style.background='orange'
										startLine=true
										x = e.pageX;
										y = e.pageY;
										startX=x
										startY=y
										dragging=true
									});
									
									div[r,c].addEventListener("mouseup", function(e){
										startLine=false
										dragging=false
										e.target.style.background='orange'
										e.target.style.cursor='pointer'
										iC2.style.display='block'
										pass=pass.substring(0,pass.length-1)
										var user_name=document.getElementById('user_input').value
										alert(pass)
										pass = Aes.Ctr.encrypt(pass, user_name, 256);
										alert(pass)
										pass = Aes.Ctr.decrypt(pass, user_name, 256);										
										alert(pass)
									});

									div[r,c].addEventListener("mouseover", function(e){
										if ((dragging) || (first)) {
											first=false
											x = e.pageX;
											y = e.pageY;
											startX=x
											startY=y
											e.target.style.cursor='pointer'
											var p=e.target.id*1
											x_curr=p
											if (x_prev) {
												if (bar[x_prev*1][x_curr*1]) {
													bar[x_prev*1][x_curr*1].style.display='block'
													e.target.style.background='#BFFF00'
													pass=pass+p+','
												} else {
													if (bar[x_curr*1][x_prev*1]) {
														bar[x_curr*1][x_prev*1].style.display='block'
														e.target.style.background='#BFFF00'
														pass=pass+p+','
													} else {
														e.target.style.background='red'
														alert('Illegal dot selection')
														dragging=false
														first=false
														iC2.style.display='block'
														return false
													}
												}
											}
											x_prev=x_curr
										}
									});
									
									div[r,c].addEventListener("mouseout", function(e){
									});
									
									div[r,c].addEventListener("click", function(e){
										e.target.style.background='orange'

									});
								}
							}
						}
						
						var line
						var ctr=0

						function createLine(x1,y1, x2,y2){
						if (dragging) {
							if (startLine) $('.line').fadeOut(100, function(){ $(this).remove(); });
								dX=0
								dY=0
								if ((posX > 37.5) && (posX <= 60)) {
									var dX=posX-37.5
								}
								if ((posY > 37.5) && (posY <= 60)) {
									var dy=posY-37.5
								}
								x1=x1-dX
								y1=y1-dY
								var length = Math.sqrt((x1-x2)*(x1-x2) + (y1-y2)*(y1-y2));
								var angle  = Math.atan2(y2 - y1, x2 - x1) * 180 / Math.PI;
								var transform = 'rotate('+angle+'deg)';
									line = $('<div>')
									.appendTo('#iC')
									.addClass('line')
									.css({
									  'position': 'absolute',
									  'transform': transform
									})
									.width(length)
									.offset({left: x1, top: y1});
						}

					}
					
	
