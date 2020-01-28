if(!_.pareto){_.pareto=1;(function($){var HT=function(a){$.lr.call(this,a);this.g=[];this.f=[];this.Rg=[];this.b=0},IT=function(a,b,c,d,e){$.FA.call(this,a,b,c,d,e)},KT=function(a,b,c){if($.n(c)&&-1<c){var d=null;a=a.data();$.n(a)&&(a=a.Al(c),$.K(a,HT)||$.K(a,JT))&&(d={},d.cf=$.Gm(a.tC(c),2),d.rf=$.Gm(a.dG(c),2))}d&&(b.cf=d.cf,b.rf=d.rf)},JT=function(a){$.lr.call(this,a)},LT=function(){$.bB.call(this);this.Fa("pareto");this.U=$.Fs();this.U.th(0).Mh(100);this.ie="pareto"},MT=function(a){if($.n(a.g)){var b=a.g;$.fr(b);b=b.b;var c=a.di(0),
d;c?d=c.bb():d=a.bb();d.th(0);b?d.Mh(b):d.Mh(1)}},Bfa=function(a,b){return $.mo(a)?$.mo(b)?-1:1:$.mo(b)?-1:b-a},NT=function(a){var b=new LT;b.pa("defaultSeriesType","column");b.Gg();b.nd();b.data(a);return b};$.H(HT,$.lr);$.g=HT.prototype;$.g.ra=1;$.g.Rj=function(a,b,c){a=HT.B.Rj.call(this,a,b,c);"value"==c&&(a=$.N(a),(0,window.isNaN)(a)||0>a)&&(a=0);return a};
$.g.XE=function(){this.g=[];this.f=[];this.Rg=[];this.b=0;this.I(1);for(var a=this.aa(),b;a.advance();)b=a.get("value"),this.Rg.push(b),this.b+=b;if(this.Rg.length)if(0==this.b)for(a=0;a<this.Rg.length;a++)this.g[a]=0,this.f[a]=0;else for(this.g[0]=this.f[0]=100*this.Rg[0]/this.b,a=1;a<this.Rg.length;a++)this.g[a]=100*this.Rg[a]/this.b,this.f[a]=this.f[a-1]+100*this.Rg[a]/this.b;return null};$.g.zH=function(a){this.bt=null;$.X(a,16)&&this.u(1,16)};$.g.tC=function(a){return this.f[a]};$.g.dG=function(a){return this.g[a]};
$.g.uk=function(a){return this.Rg[a]};$.H(IT,$.FA);$.g=IT.prototype;$.g.lE={"%BubbleSize":"size","%RangeStart":"low","%RangeEnd":"high","%XValue":"x","%CF":"cf","%RF":"rf"};$.g.Bm=function(a,b){var c=IT.B.Bm.call(this,a,b),d=this.data(),e;$.n(d)&&$.n(c.index)&&-1<(e=Number(c.index.value))&&(d=d.Al(e),$.K(d,HT)||$.K(d,JT))&&(c.cf={value:$.Gm(d.tC(e),2),type:"number"},c.rf={value:$.Gm(d.dG(e),2),type:"number"});return c};$.g.we=function(a,b){var c=IT.B.we.call(this,a,b);KT(this,c,c.index);return c};
$.g.yi=function(a){a=IT.B.yi.call(this,a);KT(this,a,a.index);return a};$.g.Id=function(a){var b=IT.B.Id.call(this,a);KT(this,b,a);return b};$.H(JT,$.lr);JT.prototype.Rj=function(a,b,c){return"value"==c?this.Xd.tC(b):JT.B.Rj.call(this,a,b,c)};JT.prototype.tC=function(a){return this.Xd.tC(a)};JT.prototype.dG=function(a){return this.Xd.dG(a)};$.H(LT,$.bB);
LT.prototype.data=function(a,b){if($.n(a)){if(a){var c=a.title||a.caption;c&&this.title(c);a.rows&&(a=a.rows)}if(this.HH!==a){this.HH=a;$.md(this.Ml);$.K(a,$.er)?this.Xd=this.Ml=a.ij():$.K(a,$.or)?this.Xd=this.Ml=a.fe():this.Xd=(this.Ml=new $.or($.A(a)||$.z(a)?a:null,b)).fe();$.V(this);this.g&&$.Nq(this.g,this.Fd,this);$.md(this.g);this.g=new HT(this.Xd.sort("value",Bfa));$.L(this.g,this.Fd,this);MT(this);c=this.di(0);var d=this.di(1);this.Na&&$.md(this.Na);this.Na=this.g.ij();c||(c=this.column());
c.data(this.Na);this.fb&&$.md(this.fb);this.fb=new JT(this.g);d||(d=this.line().clip(!1).Ib(!0).bb(this.U));d.data(this.fb);this.da(!0)}return this}return this.g};LT.prototype.Fd=function(a){$.X(a,16)&&MT(this)};var OT={},PT=$.TF|7864320;OT.area={Bb:1,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG,$.pG,$.KG,$.FG,$.xG,$.sG,$.LG,$.GG,$.MG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};OT.bar={Bb:6,Fb:2,Kb:[$.TG,$.sG,$.AG,$.MG,$.CG,$.GG,$.HG,$.LG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};
OT.box={Bb:3,Fb:2,Kb:[$.TG,$.sG,$.lO,$.mO,$.nO],Jb:null,Db:null,zb:PT,xb:"highest",vb:"lowest"};OT.bubble={Bb:4,Fb:2,Kb:[$.vG,$.wG,$.zG,$.BG],Jb:null,Db:null,zb:PT,xb:"value",vb:"value"};OT.candlestick={Bb:5,Fb:2,Kb:[$.CG,$.GG,$.HG,$.LG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};OT.column={Bb:6,Fb:2,Kb:[$.TG,$.sG,$.AG,$.MG,$.CG,$.GG,$.HG,$.LG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};OT["jump-line"]={Bb:19,Fb:2,Kb:[$.qG,$.IG,$.DG,$.rG],Jb:null,Db:null,zb:PT,xb:"value",vb:"value"};
OT.stick={Bb:20,Fb:2,Kb:[$.qG,$.IG,$.DG,$.rG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};OT.line={Bb:8,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG],Jb:null,Db:null,zb:PT,xb:"value",vb:"value"};OT.marker={Bb:9,Fb:2,Kb:[$.TG,$.sG,$.AG,$.MG,$.CG,$.GG,$.HG,$.LG],Jb:null,Db:null,zb:$.TF|3670016,xb:"value",vb:"value"};OT.ohlc={Bb:10,Fb:2,Kb:[$.DG,$.IG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};OT["range-area"]={Bb:11,Fb:1,Kb:[$.pG,$.SG,$.OG,$.sG,$.NG,$.RG,$.uG,$.tG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};
OT["range-bar"]={Bb:12,Fb:2,Kb:[$.TG,$.sG,$.PG,$.QG,$.uG,$.tG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};OT["range-column"]={Bb:12,Fb:2,Kb:[$.TG,$.sG,$.PG,$.QG,$.uG,$.tG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};OT["range-spline-area"]={Bb:13,Fb:1,Kb:[$.pG,$.OG,$.SG,$.sG,$.NG,$.RG,$.uG,$.tG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};OT["range-step-area"]={Bb:14,Fb:1,Kb:[$.pG,$.sG,$.OG,$.SG],Jb:null,Db:null,zb:PT,xb:"high",vb:"low"};
OT.spline={Bb:15,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG],Jb:null,Db:null,zb:PT,xb:"value",vb:"value"};OT["spline-area"]={Bb:16,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG,$.pG,$.KG,$.FG,$.xG,$.sG,$.LG,$.GG,$.MG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};OT["step-area"]={Bb:17,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG,$.pG,$.KG,$.FG,$.xG,$.sG,$.LG,$.GG,$.MG],Jb:null,Db:null,zb:PT,xb:"value",vb:"zero"};OT["step-line"]={Bb:18,Fb:1,Kb:[$.qG,$.JG,$.EG,$.yG],Jb:null,Db:null,zb:PT,xb:"value",vb:"value"};LT.prototype.Ki=OT;$.Zy(LT,LT.prototype.Ki);
$.g=LT.prototype;$.g.ht=function(a,b){return new IT(this,this,a,b,!0)};$.g.Sz=function(){return $.Bs};$.g.zC=function(){return["Pareto chart xScale","ordinal"]};$.g.hG=function(){return 3};$.g.eL=function(){return["Pareto chart yScale","scatter","linear, log"]};$.g.wt=function(){return[this]};$.g.SF=function(){return["value","CF","RF"]};$.g.k2=function(a,b,c){b=c.la();c=this.g.Al(b);a[1]=c.uk(b);a[2]=c.tC(b);a[3]=c.dG(b)};$.g.nb=function(){this.J(131072)&&MT(this);LT.B.nb.call(this)};
$.g.Ui=function(a){this.J(131072)&&MT(this);return LT.B.Ui.call(this,a)};$.g.z_=function(){return this.Xa()};$.g.R=function(){$.od(this.g,this.Xd,this.Ml,this.Na,this.fb);this.fb=this.Na=this.Ml=this.Xd=this.g=null;$.md(this.U);this.U=null;LT.B.R.call(this)};$.g.F=function(){var a=LT.B.F.call(this);$.n(this.data())&&(a.chart.data=this.data().F());return a};$.g.Gg=function(a){LT.B.Gg.call(this,a);this.ki(1).scale()||this.ki(1).scale(this.U)};
$.g.X=function(a,b){LT.B.X.call(this,a,b);b&&this.ki(1).scale(this.U);"data"in a&&this.data(a.data)};var QT=LT.prototype;QT.data=QT.data;QT.xScale=QT.Xa;QT.yScale=QT.bb;QT.crosshair=QT.Xg;QT.xGrid=QT.Tm;QT.yGrid=QT.Um;QT.xMinorGrid=QT.rr;QT.yMinorGrid=QT.ur;QT.xAxis=QT.jh;QT.getXAxesCount=QT.yC;QT.yAxis=QT.ki;QT.getYAxesCount=QT.AC;QT.getSeries=QT.Te;QT.lineMarker=QT.Fm;QT.rangeMarker=QT.Nm;QT.textMarker=QT.Rm;QT.palette=QT.cc;QT.markerPalette=QT.pf;QT.hatchFillPalette=QT.me;QT.getType=QT.Oa;
QT.addSeries=QT.Kk;QT.getSeriesAt=QT.di;QT.getSeriesCount=QT.tk;QT.removeSeries=QT.ho;QT.removeSeriesAt=QT.zn;QT.removeAllSeries=QT.fp;QT.getPlotBounds=QT.Lf;QT.xZoom=QT.uq;QT.yZoom=QT.vq;QT.xScroller=QT.mp;QT.yScroller=QT.vr;QT.getStat=QT.Ag;QT.annotations=QT.jk;QT.getXScales=QT.Kx;QT.getYScales=QT.Mx;$.zp.pareto=NT;$.F("anychart.pareto",NT);}).call(this,$)}