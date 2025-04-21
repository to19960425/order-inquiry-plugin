## gitclone してインストール
``` bash
cd app/Plugin
```
```bash
git clone url
```
```bash
mv order-inquiry-plugin OrderInquiry
```
```bash
#インストール
bin/console eccube:plugin:install --code=OrderInquiry
#有効化
bin/console eccube:plugin:enable --code=OrderInquiry
#無効化
bin/console eccube:plugin:disable --code=OrderInquiry
#削除
bin/console eccube:plugin:uninstall --code=OrderInquiry
#削除(プラグインのファイルも削除する場合)
bin/console eccube:plugin:uninstall --code=OrderInquiry --uninstall-force=true
```
