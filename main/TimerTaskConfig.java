package net.tokenalliance.tags.config;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.scheduling.annotation.Async;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Component;
import org.springframework.web.client.RestTemplate;

@EnableScheduling
@Component
public class TimerTaskConfig {

    Logger logger = LoggerFactory.getLogger(TimerTaskConfig.class);

    public static RestTemplate restTemplate = new RestTemplate();

    @Scheduled(cron = "*/5 * * * * ?")
    @Async("taskExecutor")
    public void  sendMsg(){
        logger.info("正在发送邮件-》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》");
    }

}
