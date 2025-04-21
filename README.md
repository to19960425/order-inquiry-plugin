## gitclone してインストール
``` bash
1. cd app/Plugin
2. git clone url
3. mv order-inquiry-plugin OrderInquiry
4.
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
