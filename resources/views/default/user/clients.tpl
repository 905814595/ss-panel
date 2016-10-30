{include file='user/main.tpl'}
{$index=1}
<div class="container">
    <div class="section"> 
        <!--   Icon Section   -->
        <div class="row">
            <div class="row marketing">
                <h2 class="sub-header" align="center">客户端下载</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>###</th>
                            <th>平台</th>
                            <th>名称</th>
                            <th>下载</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{$index++}</td>
                                <td>Android</td>
                                <td>shadowsocks 2.8.3</td>
                                <td><a href="/downloads/shadowsocks-nightly-2.8.3.apk" target="_blank">本地下载</a> /
                                    <a href="https://play.google.com/store/apps/details?id=com.github.shadowsocks" target="_blank">Google Play</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>Android</td>
                                <td>fqrouter 2.1.2(需要root，请勿升级)</td>
                                <td><a href="/downloads/fqrouter.apk" target="_blank">本地下载</a></td>
                            </tr>
<!--                             <tr>
                                <td>{$index++}</td>
                                <td>Android</td>
                                <td>OpenConnect</td>
                                <td><a href="/downloads/OpenConnect.apk" target="_blank">本地下载</a> /
                                    <a href="https://play.google.com/store/apps/details?id=app.openconnect" target="_blank">Google Play</a></td>
                            </tr> -->
                            <tr>
                                <td>{$index++}</td>
                                <td>Windows</td>
                                <td>shadowsocks 2.5.8</td>
                                <td><a href="/downloads/Shadowsocks-2.5.8.zip" target="_blank">本地下载</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>Windows</td>
                                <td>shadowsocks 3.0</td>
                                <td><a href="/downloads/Shadowsocks-3.0.zip" target="_blank">本地下载</a> /
                                    <a href="https://github.com/shadowsocks/shadowsocks-windows/releases" target="_blank">Git最新版</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>Google Chrome浏览器</td>
                                <td>SwitchySharp插件</td>
                                <td><a href="/downloads/SwitchySharp.tar.gz" target="_blank">本地下载</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>iOS</td>
                                <td>ShadowRocket</td>
                                <td><a href="https://itunes.apple.com/cn/app/shadowrocket-for-shadowsocks/id932747118" target="_blank">AppStore</a></td>
                            </tr>
<!--                             <tr>
                                <td>{$index++}</td>
                                <td>iOS</td>
                                <td>AnyConnect</td>
                                <td><a href="https://itunes.apple.com/us/app/cisco-anyconnect/id392790924" target="_blank">AppStore</a></td>
                            </tr> -->
                            <tr>
                                <td>{$index++}</td>
                                <td>ShadowRocket配置文件</td>
                                <td>http://www.abclite.cn/Abclite_SR.conf</td>
                                <td><a href="http://www.abclite.cn/Abclite_SR.conf" target="_blank">远程下载</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>Mac OS</td>
                                <td>shadowsocks 2.6.3</td>
                                <td><a href="/downloads/shadowsocksX-2.6.3.dmg" target="_blank">本地下载</a> /
                                    <a href="https://github.com/shadowsocks/shadowsocks-iOS/releases/download/2.6.3/ShadowsocksX-2.6.3.dmg" target="_blank">远程下载</a></td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>Linux</td>
                                <td>shadowsocks Qt5</td>
                                <td><a href="https://github.com/shadowsocks/shadowsocks-qt5/wiki/Installation" target="_blank">链接</a></td>
                            </tr>
                             <tr>
                                <td>{$index++}</td>
                                <td>Linux</td>
                                <td>shadowsocks Command Line</td>
                                <td>pip install shadowsocks</td>
                            </tr>
                          <tr>
                                <td>{$index++}</td>
                                <td>OpenWRT</td>
                                <td>shadowsocks-libev</td>
                                <td>opkg install shadowsocks-libev</td>
                            </tr>
                            <tr>
                                <td>{$index++}</td>
                                <td>OpenWRT</td>
                                <td>shadowsocks-libev-polarssl</td>
                                <td>opkg install shadowsocks-libev-polarssl</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include file='user/footer.tpl'}